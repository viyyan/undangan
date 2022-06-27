<?php

namespace App\Orchid\Layouts\Guest;

use App\Models\Guest;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Button;
use Carbon\Carbon;


class GuestListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'guests';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Guest $guest) {
                    return Link::make($guest->name)
                        ->route('platform.guest.edit', $guest);
                }),

            TD::make('event_id', 'Event Name')
                ->render(function (Guest $guest) {
                    return $guest->event->name;
                }),

            TD::make('confirmed', 'Confirmed')
                ->render(function (Guest $guest) {
                    return $guest->confirmed ? "confirmed" : "waiting";
                }),

            TD::make('updated_at', 'Updated')
                ->render(function (Guest $guest) {
                    return $guest->created_at->format('h:i, d F Y');
                }),

            TD::make('phone', 'Send')
                ->render(function (Guest $guest) {
                    $msg = $this->composeMessage($guest);
                    return "<div class=\"form-group mb-0\"><a href='{$msg}' class='btn btn-success' target='_blank'> Send </a></div>";
                }),
        ];
    }

    /**
     * @param Guest    $guest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function composeMessage(Guest $guest)
    {
        $msg = "
        Kepada Yth,
        Bapak/Ibu/Saudara/i
        $guest->name
        بِسْــــــــمِ اٌللَّهِ اٌلرَّحْمَنِ اٌلرَّحِيْـــــــــمِ

        Assalamualaikum Warahmatullahi Wabarakatuh

        Untuk teman-teman sekalian, dengan sampainya pesan ini saya dan pasangan ingin menyampaikan kabar gembira kepada teman-teman sekalian. Dalam rangka akan dilangsungkannya acara Akad Nikah saya dan pasangan pada:

        Hari/Tanggal: ".Carbon::parse($guest->event->event_date)->translatedFormat('l, d F Y')."
        Tempat: Bogor
        [link undangan]

        Sebelumnya kami sampaikan permohonan maaf yang sebesar-besarnya karena satu dan lain hal kami belum bisa mengundang teman-teman ke acara pernikahan kami.

        Sekali lagi, kami memohon doa restu dari teman-teman sekalian untuk acara Akad Nikah kami nanti.

        Terima kasih.
        Wassalamualaikum Warahmatullahi Wabarakatuh

        Regards,
        Tyas & Fian";
        $msgEncode = urlencode($msg);
        $url = "https://wa.me/$guest->phone?text=$msgEncode";
        return $url;
    }
}
