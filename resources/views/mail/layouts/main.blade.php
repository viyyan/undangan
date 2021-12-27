<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0089)http://us12.campaign-archive1.com/?u=da209477415652c62c4ff96ba&id=c7b16306a4&e=7c6ba6f88c -->
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraph.org/schema/"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta property="og:title" content="Clove Research">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<meta name="viewport" content="width=device-width, initial-scale=1"><!-- So that mobile will display zoomed in -->
<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- enable media queries for windows phone 8 -->
<meta name="format-detection" content="telephone=no"><!-- disable auto telephone linking in iOS -->

<title>Clove Research</title>

<style type="text/css">
/**{border:1px solid blue;border-collapse: collapse;}*/

body
{
  margin:0;
  padding:0;
  -ms-text-size-adjust:100%;
  -webkit-text-size-adjust:100%
}

img
{
  max-width:100%;
  height:auto;
  margin:0;
  border:0;
  padding:0
}

table
{
  border-spacing:0!important;
  border-collapse:collapse!important
}

table tr,table td
{
  border-spacing:0!important;
  border-collapse:collapse!important
}

table
{
  mso-table-lspace:0;
  mso-table-rspace:0
}

img
{
  -ms-interpolation-mode:bicubic
}

</style>

</head>

<body yahoo="fix" style="margin:0; padding:0;font-family:Helvetica, Arial, Open Sans, sans-serif;" bgcolor="#f9f9f9" offset="0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!-- 100% BACKGROUND WRAPPER -->
<table border="0" width="100%" height="100%" valign="top" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9" style="font-family:Helvetica, Arial, Open Sans, sans-serif;font-size:14px; color:#ffffff;">
  <tbody>
    <tr>
      <td align="center" valign="top" bgcolor="#f9f9f9" style="background-color: #f9f9f9;">

        <!-- 600px CONTAINER-->
        <table border="0" width="100%" cellpadding="0" cellspacing="0" class="container" style="width:600px; max-width:600px;">
          <tbody>
            <tr>
            <td class="content-wrapper" align="center" style="width:600px; max-width:600px;">

              <!-- CONTENT WRAPPER-->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">
                <tbody>

                  <!-- Header -->
                  @include('mail.includes.header')

                  <!-- Main content -->
                  <tr>
                    <td align="center" valign="bottom" bgcolor="#ffffff" style="padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:40px;background-color:#ffffff;color:#333333;">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr width="100%">
                            <td width="200" align="left">
                              @yield('content')
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <!-- Footer -->
                  @include('mail.includes.footer')

                </tbody>
              </table>
              <!-- END CONTENT WRAPPER-->

            </td>
            </tr>
          </tbody>
        </table>
        <!-- END 600px CONTAINER-->

      </td>
    </tr>
  </tbody>
</table>
<!-- END 100% BACKGROUND WRAPPER -->

</body>
</html>
