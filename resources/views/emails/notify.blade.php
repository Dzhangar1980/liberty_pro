
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style type="text/css">

    * {
  margin: 0;
  padding: 0;
  font-size: 100%;
  font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  line-height: 1.65; }

img {
  max-width: 100%;
  margin: 0 auto;
  display: block; }

body,
.body-wrap {
  width: 100% !important;
  height: 100%;
  background: #efefef;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none; }

a {
  color: #003366;
  text-decoration: none; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-left {
  text-align: left; }

.button {
  display: inline-block;
  color: white;
  background: #6699ff;
  border: solid #6699ff;
  border-width: 10px 20px 8px;
  font-weight: bold;
  border-radius: 4px; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px;
  line-height: 1.25; }

h1 {
  font-size: 32px; }

h2 {
  font-size: 28px; }

h3 {
  font-size: 24px; }

h4 {
  font-size: 20px; }

h5 {
  font-size: 16px; }

p, ul, ol {
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px; }

.container {
  display: block !important;
  clear: both !important;
  margin: 0 auto !important;
  max-width: 580px !important; }
  .container table {
    width: 100% !important;
    border-collapse: collapse; }
  .container .masthead {
    padding: 50px 0;
    background: #fff;
    color: #6699ff; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      text-transform: uppercase; }
  .container .content {
    background: white;
    padding: 10px 35px; }
    .container .content.footer {
      background: none; }
      .container .content.footer p {
        margin-bottom: 0;
        color: #888;
        text-align: center;
        font-size: 14px; }
      .container .content.footer a {
        color: #888;
        text-decoration: none;
        font-weight: bold; }

    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">
                        <!-- <img src="<?php //echo $message->embed('milo/images/backgrounds/logo.png'); ?>"> -->
                        <img src="http://kalmykia-group.ru/templates/paradigm_shift/images/s5_logo.png"></img>
                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Здраствуйте {{ $user->name }}!</h2>
                        
                        <h4>У Вас новое уведомление:</h4>
                        <h6>{{ date("d.m.Y г. H:i ч.", strtotime($notify->created_at)) }}</h6>
                        <p>{!! $notify->text !!}</p>

                        <table>
                            <tr>
                                <td align="center">
                                     <div>
                                        <!--[if mso]>
                                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://libertyclub.pro/cabinet" style="height:36px;v-text-anchor:middle;width:300px;" arcsize="5%" strokecolor="#EB7035" fillcolor="#EB7035">
                                            <w:anchorlock/>
                                            <center style="color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;">Пройти в Кабинет &rarr;</center>
                                          </v:roundrect>
                                        <![endif]-->
                                        <a href="http://libertyclub.pro/cabinet" style="background-color:#EB7035;border:1px solid #EB7035;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;line-height:44px;text-align:center;text-decoration:none;width:300px;-webkit-text-size-adjust:none;mso-hide:all;">
                                            Пройти в Кабинет &rarr;
                                        </a>
                                      </div>
                                </td>
                            </tr>
                        </table>

                        <p>Это письмо было сгенерировано автоматически. <br>
                                На него не нужно отвечать.</p>
                        
                        <p>С наилучшими пожеланиями, <br/>
                        <em>Администрация LibertyClub.pro</em></p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Отправлено <a href="http://libertyclub.pro">Liberty Club</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>