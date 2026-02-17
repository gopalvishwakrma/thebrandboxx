@php
$data = $array['data'];
echo '



<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        p {
            margin: 10px 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            display: block;
            margin: 0;
            padding: 0;
        }

        img,
        a img {
            border: 0;
            height: auto;
            outline: none;
            text-decoration: none;
        }

        body,
        #bodyTable,
        #bodyCell {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .mcnPreviewText {
            display: none !important;
        }

        #outlook a {
            padding: 0;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        p,
        a,
        li,
        td,
        blockquote {
            mso-line-height-rule: exactly;
        }

        a[href^=tel],
        a[href^=sms] {
            color: inherit;
            cursor: default;
            text-decoration: none;
        }

        p,
        a,
        li,
        td,
        body,
        table,
        blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass td,
        .ExternalClass div,
        .ExternalClass span,
        .ExternalClass font {
            line-height: 100%;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .templateContainer {
            max-width: 600px !important;
        }

        a.mcnButton {
            display: block;
        }

        .mcnImage,
        .mcnRetinaImage {
            vertical-align: bottom;
        }

        .mcnTextContent {
            word-break: break-word;
        }

        .mcnTextContent img {
            height: auto !important;
        }

        .mcnDividerBlock {
            table-layout: fixed !important;
        }


        h1 {
            color: #222222;
            font-family: Helvetica;
            font-size: 40px;
            font-style: normal;
            font-weight: bold;
            line-height: 150%;
            letter-spacing: normal;
            text-align: center;
        }


        h2 {
            color: #222222;
            font-family: Helvetica;
            font-size: 34px;
            font-style: normal;
            font-weight: bold;
            line-height: 150%;
            letter-spacing: normal;
            text-align: left;
        }


        h3 {
            color: #444444;
            font-family: Helvetica;
            font-size: 22px;
            font-style: normal;
            font-weight: bold;
            line-height: 150%;
            letter-spacing: normal;
            text-align: left;
        }


        h4 {

            color: #949494;

            font-family: Georgia;

            font-size: 20px;

            font-style: italic;

            font-weight: normal;

            line-height: 125%;

            letter-spacing: normal;

            text-align: left;
        }


        #templateHeader {

            background-image: url(https://thebrandboxx.com/public/frontend/brandbox/images/Email%20Header.png);
            background-repeat: no-repeat;
            background-position: center;
            
            border-top: 0;
            border-bottom: 0;
            padding-top: 45px;
            padding-bottom: 45px;
        }


        .headerContainer {
            background-color: transparent;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }


        .headerContainer .mcnTextContent,
        .headerContainer .mcnTextContent p {
            color: #757575;
            font-family: Helvetica;
            font-size: 16px;
            line-height: 150%;
            text-align: left;
        }


        .headerContainer .mcnTextContent a,
        .headerContainer .mcnTextContent p a {
            color: #007C89;
            font-weight: normal;
            text-decoration: underline;
        }


        #templateBody {
            background-color: #FFFFFF;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 36px;
            padding-bottom: 45px;
        }


        .bodyContainer {
            background-color: transparent;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }


        .bodyContainer .mcnTextContent,
        .bodyContainer .mcnTextContent p {
            color: #757575;
            font-family: Helvetica;
            font-size: 16px;
            line-height: 150%;
            text-align: left;
        }


        .bodyContainer .mcnTextContent a,
        .bodyContainer .mcnTextContent p a {
            color: #007C89;
            font-weight: normal;
            text-decoration: underline;
        }


        #templateFooter {

            background-color: #F4F4F4;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            
            padding-bottom: 63px;
        }


        .footerContainer {
            background-color: transparent;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        .footerContainer .mcnTextContent,
        .footerContainer .mcnTextContent p {
            color: #FFFFFF;
            font-family: Helvetica;
            font-size: 12px;
            line-height: 150%;
            text-align: center;
        }

        .footerContainer .mcnTextContent a,
        .footerContainer .mcnTextContent p a {
            color: #FFFFFF;
            font-weight: normal;
            text-decoration: underline;
        }

        @media only screen and (min-width:768px) {
            .templateContainer {
                width: 600px !important;
            }

        }

        @media only screen and (max-width: 480px) {

            body,
            table,
            td,
            p,
            a,
            li,
            blockquote {
                -webkit-text-size-adjust: none !important;
            }

        }

        @media only screen and (max-width: 480px) {
            body {
                width: 100% !important;
                min-width: 100% !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnRetinaImage {
                max-width: 100% !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnImage {
                width: 100% !important;
            }

        }

        @media only screen and (max-width: 480px) {

            .mcnCartContainer,
            .mcnCaptionTopContent,
            .mcnRecContentContainer,
            .mcnCaptionBottomContent,
            .mcnTextContentContainer,
            .mcnBoxedTextContentContainer,
            .mcnImageGroupContentContainer,
            .mcnCaptionLeftTextContentContainer,
            .mcnCaptionRightTextContentContainer,
            .mcnCaptionLeftImageContentContainer,
            .mcnCaptionRightImageContentContainer,
            .mcnImageCardLeftTextContentContainer,
            .mcnImageCardRightTextContentContainer,
            .mcnImageCardLeftImageContentContainer,
            .mcnImageCardRightImageContentContainer {
                max-width: 100% !important;
                width: 100% !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnBoxedTextContentContainer {
                min-width: 100% !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnImageGroupContent {
                padding: 9px !important;
            }

        }

        @media only screen and (max-width: 480px) {

            .mcnCaptionLeftContentOuter .mcnTextContent,
            .mcnCaptionRightContentOuter .mcnTextContent {
                padding-top: 9px !important;
            }

        }

        @media only screen and (max-width: 480px) {

            .mcnImageCardTopImageContent,
            .mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,
            .mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent {
                padding-top: 18px !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnImageCardBottomImageContent {
                padding-bottom: 9px !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnImageGroupBlockInner {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcnImageGroupBlockOuter {
                padding-top: 9px !important;
                padding-bottom: 9px !important;
            }

        }

        @media only screen and (max-width: 480px) {

            .mcnTextContent,
            .mcnBoxedTextContentColumn {
                padding-right: 18px !important;
                padding-left: 18px !important;
            }

        }

        @media only screen and (max-width: 480px) {

            .mcnImageCardLeftImageContent,
            .mcnImageCardRightImageContent {
                padding-right: 18px !important;
                padding-bottom: 0 !important;
                padding-left: 18px !important;
            }

        }

        @media only screen and (max-width: 480px) {
            .mcpreview-image-uploader {
                display: none !important;
                width: 100% !important;
            }

        }

        @media only screen and (max-width: 480px) {

            h1 {

                font-size: 30px !important;

                line-height: 125% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            h2 {

                font-size: 26px !important;

                line-height: 125% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            h3 {

                font-size: 20px !important;

                line-height: 150% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            h4 {

                font-size: 18px !important;

                line-height: 150% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            .mcnBoxedTextContentContainer .mcnTextContent,
            .mcnBoxedTextContentContainer .mcnTextContent p {

                font-size: 14px !important;

                line-height: 150% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            .headerContainer .mcnTextContent,
            .headerContainer .mcnTextContent p {

                font-size: 16px !important;

                line-height: 150% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            .bodyContainer .mcnTextContent,
            .bodyContainer .mcnTextContent p {

                font-size: 16px !important;

                line-height: 150% !important;
            }

        }

        @media only screen and (max-width: 480px) {


            .footerContainer .mcnTextContent,
            .footerContainer .mcnTextContent p {

                font-size: 14px !important;

                line-height: 150% !important;
            }

        }
        .footerlogo{
            font-size: 0px;
        }
        .btn{
            background: #FFFFFF;
    border: 1px solid #1A596F;
    box-shadow: 8px 8px 0px #ba12f7;
    border-radius: 4px;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 215%;
    text-transform: capitalize;
    color: #1A596F;
    width: 200px;
    height: 56px;
    display: block;
    margin: auto;
    text-align: center;
    text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <td align="center" valign="top" id="bodyCell">
                    <!-- BEGIN TEMPLATE // -->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center" valign="top" id="templateHeader" data-template-container>
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                    class="templateContainer">
                                    <tr>
                                        <td valign="top" class="headerContainer">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                class="mcnImageBlock" style="min-width:100%;">
                                                <tbody class="mcnImageBlockOuter">
                                                    <tr>
                                                        <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                                                            <table align="left" width="100%" border="0" cellpadding="0"
                                                                cellspacing="0" class="mcnImageContentContainer"
                                                                style="min-width:100%;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="mcnImageContent" valign="top"
                                                                            style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                                                            <img align="center" alt=""
                                                                                src="https://thebrandboxx.com/public/frontend/brandbox/images/logo.svg">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" id="templateBody" data-template-container>

                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                    class="templateContainer">
                                    <tr>
                                        <td valign="top" class="bodyContainer">
                                            <table class="nl-container" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                                <tbody>
                                                    <tr>
                                                        <td width="100%" cellpadding="0" cellspacing="0"
                                                            style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;box-sizing:border-box;background-color:#ffffff;margin:0;padding:0;width:100%">
                                                            <table align="center" width="570" cellpadding="0" cellspacing="0" role="presentation"
                                                                style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;box-sizing:border-box;margin:0 auto;padding:0;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td
                                                                            style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;box-sizing:border-box;">
                                                                            <h1 style="font-style: normal;
                                                                                font-weight: bold;
                                                                                font-size: 28px;
                                                                                line-height: 41px;
                                                                                text-align: center;
                                                                                text-transform: capitalize;
                                                                                color: #282828;
                                                                                padding-top: 2rem;">';
                                                                                @endphp
                                        
                                                                                @php echo $data["from_page"] == "service" ? "Custom package query Submitted" :
                                                                                "Contact Form Confirmation";
                                                                                @endphp @php echo'</h1>
                                                                            <!-- TEXT -->
                                                                            <div style="margin-bottom: 3rem;">
                                        
                                                                                <p
                                                                                    style="font-family: Segoe UI, Tahoma, Geneva, Verdana;color: #282828;text-align: center;">
                                                                                    Dear ' .$data['fullname']. '
                                                                                </p>
                                                                                <p style="font-family: Segoe UI, Tahoma, Geneva, Verdana;color: #282828;text-align: center;">
                                                                                    ';
                                                                                @endphp

                                                                                @php echo $data["from_page"] == "service" ? "This email is to confirm your submission a custom 
                                                                              package. Please allow for 1-3 days for us to respond. In the meantime, why not browse our other 
                                                                              services" :
                                                                                "This email is to confirm your submission of the contact form. Please allow for
                                                                                48 hours for us to respond. In the meantime, why not browse our services.";
                                                                                @endphp @php echo'
                                                                                </p>                                                                                </p>
                                                                            </div>
                                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                class="mcnButtonBlock" style="min-width:100%;">
                                                <tbody class="mcnButtonBlockOuter">
                                                    <tr>
                                                        <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;"
                                                            valign="top" align="center" class="mcnButtonBlockInner">
                                                            <table border="0" cellpadding="0" cellspacing="0"
                                                                class="mcnButtonContentContainer"
                                                                style="border-collapse: separate !important; ;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="middle"
                                                                            class="mcnButtonContent"
                                                                            style="padding: 18px;">
                                                                            <a href="https://thebrandboxx.com/" class="btn">Browse Services</a>
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                                                            <!-- TEXT -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" id="templateFooter" data-template-container>

                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                    class="templateContainer">
                                    <tr>
                                        <td valign="top" class="footerContainer">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                class="mcnTextBlock" style="min-width:100%;">
                                                <tbody class="mcnTextBlockOuter">
                                                    <tr>
                                                        <td valign="top" class="mcnTextBlockInner"
                                                            style="padding-top:9px;">

                                                            <table align="left" border="0" cellpadding="0"
                                                                cellspacing="0" style="max-width:295px;" width="100%"
                                                                class="mcnTextContentContainer">
                                                                <tbody>
                                                                    <tr>
                                                                        <td valign="top" class="mcnTextContent">
                                                                            <br>
                                                                            <br>
                                                                            &nbsp;
                                                                            &nbsp;
                                                                            <img
                                                                                src="https://thebrandboxx.com/public/frontend/brandbox/images/footer-logo.svg" class="footerlogo">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table align="left" border="0" cellpadding="0"
                                                                cellspacing="0" style="max-width:300px;" width="100%"
                                                                class="mcnTextContentContainer">
                                                                <tbody>
                                                                    <tr>

                                                                        <td valign="top" class="mcnTextContent">
                                                                            <div>
                                                                                <p class="address" style="font-family: Poppins;
                                                                                    font-style: normal;
                                                                                    font-weight: 300;
                                                                                    font-size: 17px;
                                                                                    line-height: 158%;
                                                                                    color: #1A596F;
                                                                                    text-align: left;
                                                                                    margin-top: 25px;">
                                                                                  support@thebrandboxx.com<br>
                                                                               BLUESKIES DIGITAL SOLUTIONS LIMITED<br>5 St. Johns Lane, London, England, EC1M 4BH</p>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- // END TEMPLATE -->
                </td>
            </tr>
        </table>
    </center>
    <script type="text/javascript" src="/g9F8p9GC9Le34/W6mw38UHICP/6xY/w5amcG0kh7YG/ax9IbA/YGZXJ/XphB14B"></script>
</body>

</html>

';

@endphp