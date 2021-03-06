<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vieet Demo</title>
    <meta name="description" content="Vieet Demo"/>
    <style type="text/css">
        * {margin: 0; padding: 0}

        .btn:hover,
        .btn:active,
        .btn.active,
        .btn.disabled,
        .btn[disabled] {
            color: #333333;
            background-color: #e6e6e6;
            *background-color: #d9d9d9;
        }
        .btn:active,
        .btn.active {
            background-color: #cccccc \9;
        }
        .btn:first-child {
            *margin-left: 0;
        }
        .btn:hover {
            color: #333333;
            text-decoration: none;
            background-color: #e6e6e6;
            *background-color: #d9d9d9;
            /* Buttons in IE7 don't get borders, so darken on hover */

            background-position: 0 -15px;
            -webkit-transition: background-position 0.1s linear;
            -moz-transition: background-position 0.1s linear;
            -o-transition: background-position 0.1s linear;
            transition: background-position 0.1s linear;
        }
        .btn:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }
        .btn.active,
        .btn:active {
            background-color: #e6e6e6;
            background-color: #d9d9d9 \9;
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .btn.disabled,
        .btn[disabled] {
            cursor: default;
            background-color: #e6e6e6;
            background-image: none;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        .btn-large {
            padding: 9px 14px;
            font-size: 16px;
            line-height: normal;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        .btn-large [class^="icon-"] {
            margin-top: 2px;
        }
        .btn-small {
            padding: 3px 9px;
            font-size: 12px;
            line-height: 18px;
        }
        .btn-small [class^="icon-"] {
            margin-top: 0;
        }
        .btn-mini {
            padding: 2px 6px;
            font-size: 11px;
            line-height: 17px;
        }
        .btn-block {
            display: block;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .btn-block + .btn-block {
            margin-top: 5px;
        }
        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
            width: 100%;
        }

        input[type="text"]{
            width: 500px; height: 30px; border: 1px solid #cccccc;
        }
        .btn-primary.active,
        .btn-warning.active,
        .btn-danger.active,
        .btn-success.active,
        .btn-info.active,
        .btn-inverse.active {
            color: rgba(255, 255, 255, 0.75);
        }
        .btn {
            border-color: #c5c5c5;
            border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.25);
            width: 120px; height: 25px;
        }
        .btn-primary {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #006dcc;
            background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
            background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
            background-image: -o-linear-gradient(top, #0088cc, #0044cc);
            background-image: linear-gradient(to bottom, #0088cc, #0044cc);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
            border-color: #0044cc #0044cc #002a80;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #0044cc;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */

            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary.disabled,
        .btn-primary[disabled] {
            color: #ffffff;
            background-color: #0044cc;
            *background-color: #003bb3;
        }
        .btn-primary:active,
        .btn-primary.active {
            background-color: #003399 \9;
        }
        .btn-warning {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #faa732;
            background-image: -moz-linear-gradient(top, #fbb450, #f89406);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
            background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
            background-image: -o-linear-gradient(top, #fbb450, #f89406);
            background-image: linear-gradient(to bottom, #fbb450, #f89406);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
            border-color: #f89406 #f89406 #ad6704;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #f89406;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */

            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }
        .btn-warning:hover,
        .btn-warning:active,
        .btn-warning.active,
        .btn-warning.disabled,
        .btn-warning[disabled] {
            color: #ffffff;
            background-color: #f89406;
            *background-color: #df8505;
        }
        .btn-warning:active,
        .btn-warning.active {
            background-color: #c67605 \9;
        }
        .btn-danger {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #da4f49;
            background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
            background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
            background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
            background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
            border-color: #bd362f #bd362f #802420;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #bd362f;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */

            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }
        .btn-danger:hover,
        .btn-danger:active,
        .btn-danger.active,
        .btn-danger.disabled,
        .btn-danger[disabled] {
            color: #ffffff;
            background-color: #bd362f;
            *background-color: #a9302a;
        }
        .btn-danger:active,
        .btn-danger.active {
            background-color: #942a25 \9;
        }
        .btn-success {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #5bb75b;
            background-image: -moz-linear-gradient(top, #62c462, #51a351);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
            background-image: -webkit-linear-gradient(top, #62c462, #51a351);
            background-image: -o-linear-gradient(top, #62c462, #51a351);
            background-image: linear-gradient(to bottom, #62c462, #51a351);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
            border-color: #51a351 #51a351 #387038;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #51a351;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */

            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }
        .btn-success:hover,
        .btn-success:active,
        .btn-success.active,
        .btn-success.disabled,
        .btn-success[disabled] {
            color: #ffffff;
            background-color: #51a351;
            *background-color: #499249;
        }
        .btn-success:active,
        .btn-success.active {
            background-color: #408140 \9;
        }
        .btn-info {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #49afcd;
            background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
            background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
            background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
            background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
            border-color: #2f96b4 #2f96b4 #1f6377;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #2f96b4;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */

            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }
        .btn-info:hover,
        .btn-info:active,
        .btn-info.active,
        .btn-info.disabled,
        .btn-info[disabled] {
            color: #ffffff;
            background-color: #2f96b4;
            *background-color: #2a85a0;
        }
        .btn-info:active,
        .btn-info.active {
            background-color: #24748c \9;
        }
        .btn-inverse {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #363636;
            background-image: -moz-linear-gradient(top, #444444, #222222);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#444444), to(#222222));
            background-image: -webkit-linear-gradient(top, #444444, #222222);
            background-image: -o-linear-gradient(top, #444444, #222222);
            background-image: linear-gradient(to bottom, #444444, #222222);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
            border-color: #222222 #222222 #000000;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #222222;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */

            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }
        .btn-inverse:hover,
        .btn-inverse:active,
        .btn-inverse.active,
        .btn-inverse.disabled,
        .btn-inverse[disabled] {
            color: #ffffff;
            background-color: #222222;
            *background-color: #151515;
        }
        .btn-inverse:active,
        .btn-inverse.active {
            background-color: #080808 \9;
        }
        button.btn,
        input[type="submit"].btn {
            *padding-top: 3px;
            *padding-bottom: 3px;
        }
        button.btn::-moz-focus-inner,
        input[type="submit"].btn::-moz-focus-inner {
            padding: 0;
            border: 0;
        }
        button.btn.btn-large,
        input[type="submit"].btn.btn-large {
            *padding-top: 7px;
            *padding-bottom: 7px;
        }
        button.btn.btn-small,
        input[type="submit"].btn.btn-small {
            *padding-top: 3px;
            *padding-bottom: 3px;
        }
        button.btn.btn-mini,
        input[type="submit"].btn.btn-mini {
            *padding-top: 1px;
            *padding-bottom: 1px;
        }
        .btn-link,
        .btn-link:active,
        .btn-link[disabled] {
            background-color: transparent;
            background-image: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        .btn-link {
            border-color: transparent;
            cursor: pointer;
            color: #0088cc;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }
        .btn-link:hover {
            color: #005580;
            text-decoration: underline;
            background-color: transparent;
        }
        .btn-link[disabled]:hover {
            color: #333333;
            text-decoration: none;
        }
        .btn-group {
            position: relative;
            font-size: 0;
            vertical-align: middle;
            white-space: nowrap;
            *margin-left: .3em;
        }
        .btn-group:first-child {
            *margin-left: 0;
        }
        .btn-group + .btn-group {
            margin-left: 5px;
        }
        .btn-toolbar {
            font-size: 0;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .btn-toolbar .btn-group {
            display: inline-block;
            *display: inline;
            /* IE7 inline-block hack */

            *zoom: 1;
        }
        .btn-toolbar .btn + .btn,
        .btn-toolbar .btn-group + .btn,
        .btn-toolbar .btn + .btn-group {
            margin-left: 5px;
        }
        .btn-group > .btn {
            position: relative;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }
        .btn-group > .btn + .btn {
            margin-left: -1px;
        }
        .btn-group > .btn,
        .btn-group > .dropdown-menu {
            font-size: 14px;
        }
        .btn-group > .btn-mini {
            font-size: 11px;
        }
        .btn-group > .btn-small {
            font-size: 12px;
        }
        .btn-group > .btn-large {
            font-size: 16px;
        }
        .btn-group > .btn:first-child {
            margin-left: 0;
            -webkit-border-top-left-radius: 4px;
            -moz-border-radius-topleft: 4px;
            border-top-left-radius: 4px;
            -webkit-border-bottom-left-radius: 4px;
            -moz-border-radius-bottomleft: 4px;
            border-bottom-left-radius: 4px;
        }
        .btn-group > .btn:last-child,
        .btn-group > .dropdown-toggle {
            -webkit-border-top-right-radius: 4px;
            -moz-border-radius-topright: 4px;
            border-top-right-radius: 4px;
            -webkit-border-bottom-right-radius: 4px;
            -moz-border-radius-bottomright: 4px;
            border-bottom-right-radius: 4px;
        }
        .btn-group > .btn.large:first-child {
            margin-left: 0;
            -webkit-border-top-left-radius: 6px;
            -moz-border-radius-topleft: 6px;
            border-top-left-radius: 6px;
            -webkit-border-bottom-left-radius: 6px;
            -moz-border-radius-bottomleft: 6px;
            border-bottom-left-radius: 6px;
        }
        .btn-group > .btn.large:last-child,
        .btn-group > .large.dropdown-toggle {
            -webkit-border-top-right-radius: 6px;
            -moz-border-radius-topright: 6px;
            border-top-right-radius: 6px;
            -webkit-border-bottom-right-radius: 6px;
            -moz-border-radius-bottomright: 6px;
            border-bottom-right-radius: 6px;
        }
        .btn-group > .btn:hover,
        .btn-group > .btn:focus,
        .btn-group > .btn:active,
        .btn-group > .btn.active {
            z-index: 2;
        }
        .btn-group .dropdown-toggle:active,
        .btn-group.open .dropdown-toggle {
            outline: 0;
        }
        .btn-group > .btn + .dropdown-toggle {
            padding-left: 8px;
            padding-right: 8px;
            -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            *padding-top: 5px;
            *padding-bottom: 5px;
        }
        .btn-group > .btn-mini + .dropdown-toggle {
            padding-left: 5px;
            padding-right: 5px;
            *padding-top: 2px;
            *padding-bottom: 2px;
        }
        .btn-group > .btn-small + .dropdown-toggle {
            *padding-top: 5px;
            *padding-bottom: 4px;
        }
        .btn-group > .btn-large + .dropdown-toggle {
            padding-left: 12px;
            padding-right: 12px;
            *padding-top: 7px;
            *padding-bottom: 7px;
        }
        .btn-group.open .dropdown-toggle {
            background-image: none;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .btn-group.open .btn.dropdown-toggle {
            background-color: #e6e6e6;
        }
        .btn-group.open .btn-primary.dropdown-toggle {
            background-color: #0044cc;
        }
        .btn-group.open .btn-warning.dropdown-toggle {
            background-color: #f89406;
        }
        .btn-group.open .btn-danger.dropdown-toggle {
            background-color: #bd362f;
        }
        .btn-group.open .btn-success.dropdown-toggle {
            background-color: #51a351;
        }
        .btn-group.open .btn-info.dropdown-toggle {
            background-color: #2f96b4;
        }
        .btn-group.open .btn-inverse.dropdown-toggle {
            background-color: #222222;
        }
        .btn .caret {
            margin-top: 8px;
            margin-left: 0;
        }
        #container{
            width: 1000px; min-height: 500px;
            margin: auto;
            border: 1px solid #D0D0D0;
            -webkit-box-shadow: 0 0 8px #D0D0D0;
            margin-top: 20px;
        }
        header {
            width: 1000px;
            height: 100px;
            background-color: #ccc;
        }
        footer
        {
            width: 1000px;
            height: 100px;
            background-color: #bbb;
        }
        .main {
            width: 1000px;
            min-height: 400px;
            background-color: #eee;
        }

        button,
        input,
        select,
        textarea {
            margin: 0;
            font-size: 100%;
            vertical-align: middle;
        }
        button,
        input {
            *overflow: visible;
            line-height: normal;
        }
        button::-moz-focus-inner,
        input::-moz-focus-inner {
            padding: 0;
            border: 0;
        }
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            cursor: pointer;
            -webkit-appearance: button;
        }
        input[type="search"] {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-appearance: textfield;
        }
        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button {
            -webkit-appearance: none;
        }
        textarea {
            overflow: auto;
            vertical-align: top;
        }
        body {
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
            color: #333333;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<div id="container">
    <header>
        <h3>This is header</h3>
    </header>
    <div class="main">
        <table width="70%" style="padding: 20px">
            <tr>
                <td>Mã sách</td>
                <td>Tên sách</td>
                <td>Số lượng</td>
                <td>Action</td>
            </tr>
            <?php
            foreach($items as $ct){
                ?>
                <tr>
                    <td><?=$ct->bookId?></td>
                    <td><a href="http://localhost/vietdemo/index.php/book/pre_edit/<?=$ct->bookId?>" class="show"> <?=$ct->bookName?></a></td>
                    <td> <?=$ct->quantity?></td>
                    <td> <a href="http://localhost/vietdemo/index.php/book/delete/<?=$ct->bookId?>" onclick="return confirm('Ch?c ch?a')">Xóa</a>
                        | <a href="http://localhost/vietdemo/index.php/book/pre_edit/<?=$ct->bookId?>">Sửa</a></td>
                </tr>

            <?php }?>
        </table>
        <hr/><br/>
        <form action="http://localhost/vietdemo/index.php/book/insert" method="post">
            <table>
                <tr style="height:50px">
                    <td>Tên sách : </td>
                    <td><input type="text" name="txtbookName" id="txtbookName" /></td>
                </tr>
                <tr style="height:30px">
                    <td>Số lượng : </td>
                    <td><input type="text" name="txtQuantity" id="txtQuantity"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="height: 44px"><input type="submit" class="btn-danger btn" value="Save"/> </td>
                </tr>
            </table>
        </form>
    </div>
    <footer>
        <h3>This is footer</h3>
    </footer>
</div>

</body>
</html>