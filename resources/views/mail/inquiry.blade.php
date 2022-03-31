<?php
/**
 * Exhibitor Approved
 */
?>
@extends('mail.layouts.main')
@section('content')
<tr>
  <td align="center" valign="bottom" bgcolor="#ffffff" style="padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:40px;background-color:#ffffff;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr width="100%">
            <td width="200" align="left">
                <h2 style="font-size:18px;font-weight:bold;color:#333333;margin:0 0 30px;">A new message!</h2>
                <p style="font-size:13px;line-height:20px;color:#444444;margin:0 0 15px;">
                    <b>Nipe Fever got new message from:</b>
                </p>
                <p style="font-size:13px;line-height:20px;color:#444444;margin:0 0 15px;">
                    {{ $name }} (<a href="mailto:{{ $email }}?subject=Nipe Fever - Contact Us">{{ $email }}</a>)
                </p>
                <p style="font-size:13px;line-height:20px;color:#444444;margin:0 0 15px;">
                    Message: {{ $message_str }}
                </p>
                <small>For direct reply please click:
                <a href="mailto:{{ $email }}?subject=Nipe Fever - Contact Us">here</a></small>
            </td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>
@endsection
