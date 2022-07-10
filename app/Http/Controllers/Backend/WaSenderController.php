<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Helpers\Template;
use Carbon\Carbon;

class WaSenderController extends Controller
{
    public function send( Request $request, $guest_id)
    {
        $guest = Guest::findOrFail($guest_id);
        if ($guest->status == 1) {
            $guest->status = 2;
            $guest->save();
        }
        return redirect($this->composeMessage($guest));
    }


    public function getButtonSend(Guest $guest) {
        if ($guest->status == 1) {
           $msg = $this->composeMessage($guest);
           return "<div class=\"form-group mb-0\"><a href='{$msg}' class='btn btn-success' target='_blank'> Send </a></div>";
        } else {
           return "Sent";
        }
    }

    /**
     * @param Guest    $guest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function composeMessage(Guest $guest)
    {
        $tempat = ($guest->type == 1)
        ? "Lembur Kuring, Parung, Bogor"
        : "Bogor";
        $msg = "
بِسْــــــــمِ اٌللَّهِ اٌلرَّحْمَنِ اٌلرَّحِيْـــــــــمِ

Kepada Yth,
Bapak/Ibu/Saudara/i $guest->name,

Assalamualaikum Warahmatullahi Wabarakatuh

Bersama dengan pesan ini kami ingin menyampaikan kabar bahagia atas pernikahan kami, yang akan dilangsungkan pada:

Hari/Tanggal: ".Carbon::parse($guest->event->event_date)->translatedFormat('l, d F Y')."
Jam: 8:30 WIB
Tempat: $tempat

".$this->getContentByType($guest)."

Semoga doa restu dan cinta yang Bapak/Ibu/Saudara/i sekalian kirimkan, dapat menjadi keberkahan dan kekuatan besar bagi kami dalam mengarungi kehidupan baru.
Terima kasih.

Wassalamualaikum Warahmatullahi Wabarakatuh

Tyas & Fian";
        if ($guest->type == 1) $msg = $msg . "

Google Map: https://g.page/lemburkuringprg?share";
        if ($guest->type == 3) $msg = $msg . "

".route('guest', $guest->slug);
        $msgEncode = urlencode($msg);
        $url = "https://wa.me/".$this->cleanPhone($guest->phone)."?text=$msgEncode";
        return $url;
    }


    private function cleanPhone($phone) {
        $phone = preg_replace("/[^0-9]/","", $phone);
        if (substr($phone, 0, 1) == "0") {
            $phone = preg_replace('/^0?/', '62', $phone);
        }
        return $phone;
    }


    private function getContentByType($guest) {
        $url = route('guest', [ 'to' => $guest->slug ]);
        $nonInvitee = "Tanpa mengurangi rasa hormat, belum memungkinkan bagi kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami secara langsung.";
        switch ($guest->type) {
            case 1:
                $txt = "Mohon kesediaannya untuk mengisi form konfirmasi kedatangannya di bawah ini.
$url#akad";
                break;
            case 2:
                $txt = "$nonInvitee

Oleh karena itu, kami ingin mengirimkan bingkisan sederhana untuk teman-teman. Mohon isi alamat lengkap teman-teman melalui form berikut ini.
$url#akad";
                break;
            case 3:
                $txt = $nonInvitee;
                break;
        }

        return $txt;
    }
}
