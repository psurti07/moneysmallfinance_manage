<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />

    <title>{{ env('APP_NAME') }}</title>
    <style>
    
        /*--------------------------------------------------------------
>> TABLE OF CONTENTS:
----------------------------------------------------------------
1. Normalize
2. Typography
3. Invoice General Style
--------------------------------------------------------------*/
        /*--------------------------------------------------------------
        2. Normalize
        ----------------------------------------------------------------*/
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap");
        *,
        ::after,
        ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        /* Sections
           ========================================================================== */
        /**
         * Remove the margin in all browsers.
         */
        body {
            margin: 0;
        }

        /**
         * Render the `main` element consistently in IE.
         */
        main {
            display: block;
        }

        /**
         * Correct the font size and margin on `h1` elements within `section` and
         * `article` contexts in Chrome, Firefox, and Safari.
         */
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        /* Grouping content
           ========================================================================== */
        /**
         * 1. Add the correct box sizing in Firefox.
         * 2. Show the overflow in Edge and IE.
         */
        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box; /* 1 */
            height: 0; /* 1 */
            overflow: visible; /* 2 */
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */
        pre {
            font-family: monospace, monospace; /* 1 */
            font-size: 1em; /* 2 */
        }

        /* Text-level semantics
           ========================================================================== */
        /**
         * Remove the gray background on active links in IE 10.
         */
        a {
            background-color: transparent;
        }

        /**
         * 1. Remove the bottom border in Chrome 57-
         * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
         */
        abbr[title] {
            border-bottom: none; /* 1 */
            text-decoration: underline; /* 2 */
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted; /* 2 */
        }

        /**
         * Add the correct font weight in Chrome, Edge, and Safari.
         */
        b,
        strong {
            font-weight: bolder;
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */
        code,
        kbd,
        samp {
            font-family: monospace, monospace; /* 1 */
            font-size: 1em; /* 2 */
        }

        /**
         * Add the correct font size in all browsers.
         */
        small {
            font-size: 80%;
        }

        /**
         * Prevent `sub` and `sup` elements from affecting the line height in
         * all browsers.
         */
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /* Embedded content
           ========================================================================== */
        /**
         * Remove the border on images inside links in IE 10.
         */
        img {
            border-style: none;
        }

        /* Forms
           ========================================================================== */
        /**
         * 1. Change the font styles in all browsers.
         * 2. Remove the margin in Firefox and Safari.
         */
        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit; /* 1 */
            font-size: 100%; /* 1 */
            line-height: 1.15; /* 1 */
            margin: 0; /* 2 */
        }

        /**
         * Show the overflow in IE.
         * 1. Show the overflow in Edge.
         */
        button,
        input {
            /* 1 */
            overflow: visible;
        }

        /**
         * Remove the inheritance of text transform in Edge, Firefox, and IE.
         * 1. Remove the inheritance of text transform in Firefox.
         */
        button,
        select {
            /* 1 */
            text-transform: none;
        }

        /**
         * Correct the inability to style clickable types in iOS and Safari.
         */
        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
        }

        /**
         * Remove the inner border and padding in Firefox.
         */
        button::-moz-focus-inner,
        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /**
         * Restore the focus styles unset by the previous rule.
         */
        button:-moz-focusring,
        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        /**
         * Correct the padding in Firefox.
         */
        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        /**
         * 1. Correct the text wrapping in Edge and IE.
         * 2. Correct the color inheritance from `fieldset` elements in IE.
         * 3. Remove the padding so developers are not caught out when they zero out
         *    `fieldset` elements in all browsers.
         */
        legend {
            -webkit-box-sizing: border-box;
            box-sizing: border-box; /* 1 */
            color: inherit; /* 2 */
            display: table; /* 1 */
            max-width: 100%; /* 1 */
            padding: 0; /* 3 */
            white-space: normal; /* 1 */
        }

        /**
         * Add the correct vertical alignment in Chrome, Firefox, and Opera.
         */
        progress {
            vertical-align: baseline;
        }

        /**
         * Remove the default vertical scrollbar in IE 10+.
         */
        textarea {
            overflow: auto;
        }

        /**
         * 1. Add the correct box sizing in IE 10.
         * 2. Remove the padding in IE 10.
         */
        [type=checkbox],
        [type=radio] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box; /* 1 */
            padding: 0; /* 2 */
        }

        /**
         * Correct the cursor style of increment and decrement buttons in Chrome.
         */
        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto;
        }

        /**
         * 1. Correct the odd appearance in Chrome and Safari.
         * 2. Correct the outline style in Safari.
         */
        [type=search] {
            -webkit-appearance: textfield; /* 1 */
            outline-offset: -2px; /* 2 */
        }

        /**
         * Remove the inner padding in Chrome and Safari on macOS.
         */
        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /**
         * 1. Correct the inability to style clickable types in iOS and Safari.
         * 2. Change font properties to `inherit` in Safari.
         */
        ::-webkit-file-upload-button {
            -webkit-appearance: button; /* 1 */
            font: inherit; /* 2 */
        }

        /* Interactive
           ========================================================================== */
        /*
         * Add the correct display in Edge, IE 10+, and Firefox.
         */
        details {
            display: block;
        }

        .logo-width{
            width:171px;
        }
        /*
         * Add the correct display in all browsers.
         */
        summary {
            display: list-item;
        }

        /* Misc
           ========================================================================== */
        /**
         * Add the correct display in IE 10+.
         */
        template {
            display: none;
        }

        /**
         * Add the correct display in IE 10.
         */
        [hidden] {
            display: none;
        }

        /*--------------------------------------------------------------
        2. Typography
        ----------------------------------------------------------------*/
        body,
        html {
            color: #666;
            font-family: "Inter", sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.6em;
            overflow-x: hidden;
            background-color: #f5f6fa;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            clear: both;
            color: #111;
            padding: 0;
            margin: 0 0 20px 0;
            font-weight: 500;
            line-height: 1.2em;
        }

        h1 {
            font-size: 60px;
        }

        h2 {
            font-size: 48px;
        }

        h3 {
            font-size: 30px;
        }

        h4 {
            font-size: 24px;
        }

        h5 {
            font-size: 18px;
        }

        h6 {
            font-size: 16px;
        }

        p,
        div {
            margin-top: 0;
            line-height: 1.5em;
        }

        p {
            margin-bottom: 15px;
        }

        ul {
            margin: 0 0 25px 0;
            padding-left: 20px;
            list-style: disc;
        }

        ol {
            padding-left: 20px;
            margin-bottom: 25px;
        }

        dfn,
        cite,
        em,
        i {
            font-style: italic;
        }

        blockquote {
            margin: 0 15px;
            font-style: italic;
            font-size: 20px;
            line-height: 1.6em;
            margin: 0;
        }

        address {
            margin: 0 0 15px;
        }

        img {
            border: 0;
            max-width: 90%;
            height: auto;
            vertical-align: middle;
        }

        a {
            color: inherit;
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        a:hover {
            color: #0a8b4b;
        }

        button {
            color: inherit;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        a:hover {
            text-decoration: none;
            color: inherit;
        }

        table {
            width: 100%;
            caption-side: bottom;
            border-collapse: collapse;
        }

        th {
            text-align: left;
        }

        td {
            border-top: 1px solid #dbdfea;
        }

        td {
            padding: 10px 15px;
            line-height: 1.55em;
        }

        th {
            padding: 10px 15px;
            line-height: 1.55em;
        }

        dl {
            margin-bottom: 25px;
        }
        dl dt {
            font-weight: 600;
        }

        b,
        strong {
            font-weight: bold;
        }

        pre {
            color: #666;
            border: 1px solid #dbdfea;
            font-size: 18px;
            padding: 25px;
            border-radius: 5px;
        }

        kbd {
            font-size: 100%;
            background-color: #666;
            border-radius: 5px;
        }

        a:hover {
            color: #0a8b4b;
        }

        ul {
            padding-left: 15px;
        }

        /*--------------------------------------------------------------
        3. Invoice General Style
        ----------------------------------------------------------------*/
        .tm_f10 {
            font-size: 10px;
        }

        .tm_f11 {
            font-size: 11px;
        }

        .tm_f12 {
            font-size: 12px;
        }

        .tm_f13 {
            font-size: 13px;
        }

        .tm_f14 {
            font-size: 14px;
        }

        .tm_f15 {
            font-size: 15px;
        }

        .tm_f16 {
            font-size: 16px;
        }

        .tm_f17 {
            font-size: 17px;
        }

        .tm_f18 {
            font-size: 18px;
        }

        .tm_f19 {
            font-size: 19px;
        }

        .tm_f20 {
            font-size: 20px;
        }

        .tm_f21 {
            font-size: 21px;
        }

        .tm_f22 {
            font-size: 22px;
        }

        .tm_f23 {
            font-size: 23px;
        }

        .tm_f24 {
            font-size: 24px;
        }

        .tm_f25 {
            font-size: 25px;
        }

        .tm_f26 {
            font-size: 26px;
        }

        .tm_f27 {
            font-size: 27px;
        }

        .tm_f28 {
            font-size: 28px;
        }

        .tm_f29 {
            font-size: 29px;
        }

        .tm_f30 {
            font-size: 30px;
        }

        .tm_f40 {
            font-size: 40px;
        }

        .tm_f50 {
            font-size: 50px;
        }

        .tm_light {
            font-weight: 300;
        }

        .tm_normal {
            font-weight: 400;
        }

        .tm_medium {
            font-weight: 500;
        }

        .tm_semi_bold {
            font-weight: 600;
        }

        .tm_bold {
            font-weight: 700;
        }

        .tm_m0 {
            margin: 0px;
        }

        .tm_mb0 {
            margin-bottom: 0px;
        }

        .tm_mb1 {
            margin-bottom: 1px;
        }

        .tm_mb2 {
            margin-bottom: 2px;
        }

        .tm_mb3 {
            margin-bottom: 3px;
        }

        .tm_mb4 {
            margin-bottom: 4px;
        }

        .tm_mb5 {
            margin-bottom: 5px;
        }

        .tm_mb6 {
            margin-bottom: 6px;
        }

        .tm_mb7 {
            margin-bottom: 7px;
        }

        .tm_mb8 {
            margin-bottom: 8px;
        }

        .tm_mb9 {
            margin-bottom: 9px;
        }

        .tm_mb10 {
            margin-bottom: 10px;
        }

        .tm_mb11 {
            margin-bottom: 11px;
        }

        .tm_mb12 {
            margin-bottom: 12px;
        }

        .tm_mb13 {
            margin-bottom: 13px;
        }

        .tm_mb14 {
            margin-bottom: 14px;
        }

        .tm_mb15 {
            margin-bottom: 15px;
        }

        .tm_mb16 {
            margin-bottom: 16px;
        }

        .tm_mb17 {
            margin-bottom: 17px;
        }

        .tm_mb18 {
            margin-bottom: 18px;
        }

        .tm_mb19 {
            margin-bottom: 19px;
        }

        .tm_mb20 {
            margin-bottom: 20px;
        }

        .tm_mb21 {
            margin-bottom: 21px;
        }

        .tm_mb22 {
            margin-bottom: 22px;
        }

        .tm_mb23 {
            margin-bottom: 23px;
        }

        .tm_mb24 {
            margin-bottom: 24px;
        }

        .tm_mb25 {
            margin-bottom: 25px;
        }

        .tm_mb26 {
            margin-bottom: 26px;
        }

        .tm_mb27 {
            margin-bottom: 27px;
        }

        .tm_mb28 {
            margin-bottom: 28px;
        }

        .tm_mb29 {
            margin-bottom: 29px;
        }

        .tm_mb30 {
            margin-bottom: 30px;
        }

        .tm_mb40 {
            margin-bottom: 40px;
        }

        .tm_pt25 {
            padding-top: 25px;
        }

        .tm_pt0 {
            padding-top: 0;
        }

        .tm_radius_6_0_0_6 {
            border-radius: 6px 0 0 6px;
        }

        .tm_radius_0_6_6_0 {
            border-radius: 0 6px 6px 0;
        }

        .tm_radius_0 {
            border-radius: 0 !important;
        }

        .tm_width_1 {
            width: 8.33333333%;
        }

        .tm_width_2 {
            width: 16.66666667%;
        }

        .tm_width_3 {
            width: 25%;
        }

        .tm_width_4 {
            width: 33.33333333%;
        }

        .tm_width_5 {
            width: 41.66666667%;
        }

        .tm_width_6 {
            width: 50%;
        }

        .tm_width_7 {
            width: 58.33333333%;
        }

        .tm_width_8 {
            width: 66.66666667%;
        }

        .tm_width_9 {
            width: 75%;
        }

        .tm_width_10 {
            width: 83.33333333%;
        }

        .tm_width_11 {
            width: 91.66666667%;
        }

        .tm_width_12 {
            width: 100%;
        }

        .tm_border {
            border: 1px solid #e4d8ff;
        }

        .tm_border_bottom {
            border-bottom: 1px solid #dbdfea;
        }

        .tm_border_top {
            border-top: 1px solid #dbdfea;
        }

        .tm_border_left {
            border-left: 1px solid #dbdfea;
        }

        .tm_border_right {
            border-right: 1px solid #dbdfea;
        }

        .tm_round_border {
            border: 1px solid #dbdfea;
            overflow: hidden;
            border-radius: 6px;
        }

        .tm_accent_color,
        .tm_accent_color_hover:hover {
            color: #0a8b4b;
        }

        .tm_accent_bg,
        .tm_accent_bg_hover:hover {
            background-color: #0a8b4b;
        }

        .tm_accent_bg_10 {
            background-color: rgb(248, 248, 248);
        }

        .tm_accent_bg_20 {
            background-color: rgba(0, 122, 255, 0.15);
        }

        .tm_green_bg {
            background-color: #34c759;
        }

        .tm_green_bg_15 {
            background-color: rgba(52, 199, 89, 0.1);
        }

        .tm_primary_bg,
        .tm_primary_bg_hover:hover {
            background-color: #111;
        }

        .tm_primary_bg_2 {
            background-color: #000036;
        }

        .tm_danger_color {
            color: red;
        }

        .tm_primary_color {
            color: #111;
        }

        .tm_secondary_color {
            color: #666;
        }

        .tm_ternary_color {
            color: #b5b5b5;
        }

        .tm_white_color {
            color: #fff;
        }

        .tm_white_color_60 {
            color: rgba(255, 255, 255, 0.6);
        }

        .tm_gray_bg {
            background: #f5f6fa;
        }

        .tm_ternary_bg {
            background-color: #b5b5b5;
        }

        .tm_accent_10_bg {
            background-color: rgb(242 238 251);
        }

        .tm_accent_border {
            border-color: #0a8b4b;
        }

        .tm_accent_border_10 {
            border-color: rgb(242 238 251);
        }

        .tm_accent_border_20 {
            border-color: #e4d8ff;
        }

        .tm_accent_border_30 {
            border-color: rgba(0, 122, 255, 0.3);
        }

        .tm_accent_border_40 {
            border-color: rgba(0, 122, 255, 0.4);
        }

        .tm_accent_border_50 {
            border-color: rgba(0, 122, 255, 0.5);
        }

        .tm_primary_border {
            border-color: #111;
        }

        .tm_gray_border {
            border-color: #f5f6fa;
        }

        .tm_primary_border_2 {
            border-color: #000036;
        }

        .tm_secondary_border {
            border-color: #666;
        }

        .tm_ternary_border {
            border-color: #b5b5b5;
        }

        .tm_border_color {
            border-color: #dbdfea;
        }

        .tm_border_1 {
            border-style: solid;
            border-width: 1px;
        }

        .tm_body_lineheight {
            line-height: 1.5em;
        }

        .tm_invoice_in {
            position: relative;
            z-index: 100;
        }

        .tm_container {
            max-width: 880px;
            padding: 30px 15px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .tm_text_center {
            text-align: center;
        }

        .tm_text_uppercase {
            text-transform: uppercase;
        }

        .tm_text_right {
            text-align: right;
        }

        .tm_align_center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .tm_border_bottom_0 {
            border-bottom: 0;
        }

        .tm_border_top_0 {
            border-top: 0;
        }

        .tm_table_baseline {
            vertical-align: baseline;
        }

        .tm_border_none {
            border: none !important;
        }

        .tm_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .tm_justify_between {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .tm__align_center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .tm_border_left_none {
            border-left-width: 0;
        }

        .tm_border_right_none {
            border-right-width: 0;
        }

        .tm_table_responsive {
            overflow-x: auto;
        }
        .tm_table_responsive > table {
            min-width: 600px;
        }

        .tm_50_col > * {
            width: 50%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }

        .tm_no_border {
            border: none !important;
        }

        .tm_grid_row {
            display: grid;
            grid-gap: 10px 20px;
            list-style: none;
            padding: 0;
        }

        .tm_col_2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .tm_col_3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .tm_col_4 {
            grid-template-columns: repeat(4, 1fr);
        }

        .tm_max_w_150 {
            max-width: 150px;
        }

        .tm_left_auto {
            margin-left: auto;
        }

        hr {
            background: #dbdfea;
            height: 1px;
            border: none;
            margin: 0;
        }

        .tm_invoice {
            background: #fff;
            border-radius: 10px;
            padding: 50px;
        }

        .tm_invoice_footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice_footer table {
            margin-top: -1px;
        }
        .tm_invoice_footer .tm_left_footer {
            width: 58%;
            padding: 10px 15px;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice_footer .tm_right_footer {
            width: 42%;
        }

        .tm_note {
            margin-top: 30px;
            font-style: italic;
        }

        .tm_font_style_normal {
            font-style: normal;
        }

        .tm_sign img {
            max-height: 45px;
        }

        .tm_coffee_shop_img {
            position: absolute;
            height: 200px;
            opacity: 0.04;
            top: 40px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .tm_coffee_shop_img img {
            max-height: 100%;
        }

        .tm_invoice.tm_style1 .tm_invoice_right {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
            width: 60%;
        }
        .tm_invoice.tm_style1 .tm_invoice_table {
            grid-gap: 1px;
        }
        .tm_invoice.tm_style1 .tm_invoice_table > * {
            border: 1px solid #dbdfea;
            margin: -1px;
            padding: 8px 15px 10px;
        }
        .tm_invoice.tm_style1 .tm_invoice_head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right div {
            line-height: 1em;
        }
        .tm_invoice.tm_style1 .tm_invoice_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .tm_invoice.tm_style1 .tm_invoice_info_2 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-top: 1px solid #dbdfea;
            border-bottom: 1px solid #dbdfea;
            padding: 11px 0;
        }
        .tm_invoice.tm_style1 .tm_invoice_seperator {
            min-height: 18px;
            border-radius: 1.6em;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin-right: 20px;
        }
        .tm_invoice.tm_style1 .tm_invoice_info_list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1 .tm_invoice_info_list > *:not(:last-child) {
            margin-right: 20px;
        }
        .tm_invoice.tm_style1 .tm_logo img {
            max-height: 50px;
        }
        .tm_invoice.tm_style1 .tm_logo.tm_size1 img {
            max-height: 60px;
        }
        .tm_invoice.tm_style1 .tm_logo.tm_size2 img {
            max-height: 70px;
        }
        .tm_invoice.tm_style1 .tm_grand_total {
            padding: 8px 15px;
        }
        .tm_invoice.tm_style1 .tm_box_3 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1 .tm_box_3 > * {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul li:not(:last-child) {
            margin-bottom: 5px;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul span {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul span:first-child {
            margin-right: 5px;
        }
        .tm_invoice.tm_style1 .tm_box_3 ul span:last-child {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .tm_invoice.tm_style2 .tm_invoice_head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-bottom: 1px solid #dbdfea;
            padding-bottom: 15px;
            position: relative;
        }
        .tm_invoice.tm_style2 .tm_invoice_left {
            width: 27%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_invoice_right {
            width: 35%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_invoice_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style2 .tm_invoice_info_left {
            width: 30%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_invoice_info_right {
            width: 70%;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none;
        }
        .tm_invoice.tm_style2 .tm_logo img {
            max-height: 60px;
        }
        .tm_invoice.tm_style2 .tm_invoice_title {
            line-height: 0.8em;
        }
        .tm_invoice.tm_style2 .tm_invoice_info_in {
            padding: 12px 20px;
            border-radius: 10px;
        }
        .tm_invoice.tm_style2 .tm_card_note {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 6px;
            margin-bottom: 10px;
            margin-top: 5px;
        }
        .tm_invoice.tm_style2 .tm_invoice_footer .tm_left_footer {
            padding-left: 0;
        }

        .tm_invoice.tm_style1.tm_type1 {
            padding: 0px 50px 30px;
            position: relative;
            overflow: hidden;
            border-radius: 0;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
            height: 110px;
            position: relative;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_shape_bg {
            position: absolute;
            height: 100%;
            width: 70%;
            -webkit-transform: skewX(35deg);
            transform: skewX(35deg);
            top: 0px;
            right: -100px;
            overflow: hidden;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_shape_bg img {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -webkit-transform: skewX(-35deg) translateX(-45px);
            transform: skewX(-35deg) translateX(-45px);
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_right {
            position: relative;
            z-index: 2;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_logo img {
            max-height: 70px;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
            margin-right: 0;
            border-radius: 0;
            -webkit-transform: skewX(35deg);
            transform: skewX(35deg);
            position: absolute;
            height: 100%;
            width: 57.5%;
            right: -60px;
            overflow: hidden;
            border: none;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
            -webkit-transform: skewX(-35deg) translateX(-10px);
            transform: skewX(-35deg) translateX(-10px);
        }
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
            position: relative;
            padding: 4px 0;
        }
        .tm_invoice.tm_style1.tm_type1 .tm_card_note,
        .tm_invoice.tm_style1.tm_type1 .tm_invoice_info_list {
            position: relative;
            z-index: 1;
        }

        .tm_invoice.tm_style3 {
            padding: 0;
        }
        .tm_invoice.tm_style3 .tm_invoice_head {
            padding: 60px 50px;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-radius: 10px 10px 0 0;
        }
        .tm_invoice.tm_style3 .tm_head_address {
            border-left: 2px solid;
            padding: 0px 0 0px 15px;
        }
        .tm_invoice.tm_style3 .tm_invoice_left,
        .tm_invoice.tm_style3 .tm_invoice_right {
            position: relative;
            z-index: 1;
        }
        .tm_invoice.tm_style3 .tm_watermark_title {
            position: absolute;
            left: 0;
            top: 0;
            line-height: 1em;
            font-size: 165px;
            font-weight: bold;
            padding: 20px 30px 20px 30px;
            letter-spacing: 18px;
            opacity: 0.08;
        }
        .tm_invoice.tm_style3 .tm_invoice_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            padding: 0 50px;
            margin-top: -25px;
            padding-bottom: 40px;
        }
        .tm_invoice.tm_style3 .tm_invoice_info_left {
            padding: 20px 30px;
            position: relative;
            z-index: 2;
        }
        .tm_invoice.tm_style3 .tm_invoice_details {
            padding: 0 50px 50px 50px;
        }
        .tm_invoice.tm_style3 .tm_table.tm_style1 th {
            border-color: rgba(255, 255, 255, 0.231372549);
        }
        .tm_invoice.tm_style3 .tm_invoice_footer .tm_left_footer {
            padding: 20px 15px;
        }

        @media (min-width: 500px) {
            .tm_invoice.tm_style1.tm_type2 {
                position: relative;
                overflow: hidden;
                border-radius: 0;
            }
            .tm_invoice.tm_style1.tm_type2 td {
                padding-top: 12px;
                padding-bottom: 12px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_pt0 {
                padding-top: 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                top: 0px;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
                overflow: hidden;
                padding: 0 15px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars span {
                height: 100px;
                width: 5px;
                display: block;
                margin: -15px 20px 0;
                -webkit-transform: rotate(-40deg);
                transform: rotate(-40deg);
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars.tm_type1 {
                top: initial;
                bottom: 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_bars.tm_type1 span {
                margin: 0 20px 0;
                position: relative;
                bottom: -15px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape {
                height: 230px;
                width: 250px;
                position: absolute;
                top: 0;
                right: 0;
                overflow: hidden;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape .tm_shape_in {
                position: absolute;
                height: 350px;
                width: 350px;
                -webkit-transform: rotate(40deg);
                transform: rotate(40deg);
                top: -199px;
                left: 67px;
                overflow: hidden;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape.tm_type1 {
                top: initial;
                bottom: 0;
                right: initial;
                left: 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape.tm_type1 .tm_shape_in {
                top: 135px;
                left: -153px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2 {
                height: 120px;
                width: 120px;
                border: 5px solid currentColor;
                padding: 20px;
                position: absolute;
                bottom: -30px;
                right: 77px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2 .tm_shape_2_in {
                height: 100%;
                width: 100%;
                border: 20px solid currentColor;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2.tm_type1 {
                left: -76px;
                right: initial;
                bottom: 245px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_2.tm_type1 .tm_shape_2_in {
                border-width: 6px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_invoice_right {
                width: 40%;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_logo img {
                max-height: 65px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_invoice_footer {
                margin-bottom: 120px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_right_footer {
                position: relative;
                padding: 6px 0;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_right_footer table {
                position: relative;
                z-index: 2;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_left_footer {
                padding: 30px 15px;
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_3 {
                position: absolute;
                top: 0;
                left: -40px;
                height: 100%;
                width: calc(100% + 150px);
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
            }
            .tm_invoice.tm_style1.tm_type2 .tm_shape_4 {
                position: absolute;
                bottom: 200px;
                left: 0;
                height: 200px;
                width: 200px;
            }
        }
        .tm_invoice.tm_style1.tm_type3 {
            position: relative;
            overflow: hidden;
            border-radius: 0;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_shape_1 {
            position: absolute;
            top: -1px;
            left: 0;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_shape_2 {
            position: absolute;
            bottom: 0;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_logo img {
            max-height: 60px;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_invoice_head.tm_mb20 {
            margin-bottom: 65px;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_invoice_info_list {
            position: relative;
            padding: 10px 0 10px 40px;
        }
        .tm_invoice.tm_style1.tm_type3 .tm_invoice_info_list_bg {
            position: absolute;
            height: 100%;
            width: calc(100% + 100px);
            top: 0;
            left: 0;
            border-radius: 20px 0 0 0px;
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
        }

        .tm_invoice.tm_style2.tm_type1 {
            padding-top: 0;
            padding-bottom: 0;
            border-width: 40px 0 0;
            border-style: solid;
            position: relative;
            overflow: hidden;
        }
        .tm_invoice.tm_style2.tm_type1.tm_small_border {
            border-width: 7px 0 0;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
            position: absolute;
            height: 100%;
            width: 37%;
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
            top: 0px;
            left: -100px;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_invoice_head {
            padding-top: 15px;
            border-bottom: none;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_logo {
            position: relative;
            z-index: 2;
        }
        .tm_invoice.tm_style2.tm_type1 .tm_bottom_invoice {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 15px 50px 20px;
            border-top: 1px solid #dbdfea;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 30px -50px 0;
        }

        .tm_invoice_content {
            position: relative;
            z-index: 10;
        }

        .tm_invoice_wrap {
            position: relative;
        }

        .tm_note_list li:not(:last-child) {
            margin-bottom: 5px;
        }

        .tm_list.tm_style1 {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .tm_list.tm_style1 svg {
            width: 16px;
            height: initial;
        }
        .tm_list.tm_style1 .tm_list_icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            left: 0;
            top: 3px;
        }
        .tm_list.tm_style1 li {
            padding-left: 25px;
            position: relative;
        }
        .tm_list.tm_style1 li:not(:last-child) {
            margin-bottom: 5px;
        }
        .tm_list.tm_style1.tm_text_right li {
            padding-left: 0;
            padding-right: 25px;
        }
        .tm_list.tm_style1.tm_text_right .tm_list_icon {
            left: initial;
            right: 0;
        }

        .tm_section_heading {
            border-width: 0 0 1px 0;
            border-style: solid;
        }
        .tm_section_heading > span {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 7px 7px 0 0;
        }
        .tm_section_heading .tm_curve_35 {
            margin-left: 12px;
            margin-right: 0;
        }
        .tm_section_heading .tm_curve_35 span {
            display: inline-block;
        }

        .tm_padd_15_20 {
            padding: 15px 20px;
        }

        .tm_padd_8_20 {
            padding: 8px 20px;
        }

        .tm_padd_20 {
            padding: 20px;
        }

        .tm_padd_15 {
            padding: 15px;
        }

        .tm_padd_10 {
            padding: 10px;
        }

        .tm_padd_5 {
            padding: 5px;
        }

        .tm_curve_35 {
            -webkit-transform: skewX(-35deg);
            transform: skewX(-35deg);
            padding: 12px 20px 12px 30px;
            margin-left: 22px;
            margin-right: 22px;
        }
        .tm_curve_35 > * {
            -webkit-transform: skewX(35deg);
            transform: skewX(35deg);
        }

        .tm_dark_invoice_body {
            background-color: #18191a;
        }

        .tm_dark_invoice {
            background: #252526;
            color: rgba(255, 255, 255, 0.65);
        }
        .tm_dark_invoice .tm_primary_color {
            color: rgba(255, 255, 255, 0.9);
        }
        .tm_dark_invoice .tm_secondary_color {
            color: rgba(255, 255, 255, 0.65);
        }
        .tm_dark_invoice .tm_ternary_color {
            color: rgba(255, 255, 255, 0.4);
        }
        .tm_dark_invoice .tm_gray_bg {
            background: rgba(255, 255, 255, 0.08);
        }
        .tm_dark_invoice .tm_border_color,
        .tm_dark_invoice .tm_round_border,
        .tm_dark_invoice td,
        .tm_dark_invoice th,
        .tm_dark_invoice .tm_border_top,
        .tm_dark_invoice .tm_border_bottom {
            border-color: rgba(255, 255, 255, 0.1);
        }
        .tm_dark_invoice + .tm_invoice_btns {
            background: #252526;
            border-color: #252526;
        }

        @media (min-width: 1000px) {
            .tm_invoice_btns {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-top: 0px;
                margin-left: 20px;
                position: absolute;
                left: 100%;
                top: 0;
                -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                border: 3px solid #fff;
                border-radius: 6px;
                background-color: #fff;
            }
            .tm_invoice_btn {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                border: none;
                font-weight: 600;
                cursor: pointer;
                padding: 0;
                background-color: transparent;
                position: relative;
            }
            .tm_invoice_btn svg {
                width: 24px;
            }
            .tm_invoice_btn .tm_btn_icon {
                padding: 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                height: 42px;
                width: 42px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
            .tm_invoice_btn .tm_btn_text {
                position: absolute;
                left: 100%;
                background-color: #111;
                color: #fff;
                padding: 3px 12px;
                display: inline-block;
                margin-left: 10px;
                border-radius: 5px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                font-weight: 500;
                min-height: 28px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                opacity: 0;
                visibility: hidden;
            }
            .tm_invoice_btn .tm_btn_text:before {
                content: "";
                height: 10px;
                width: 10px;
                position: absolute;
                background-color: #111;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: -3px;
                top: 50%;
                margin-top: -6px;
                border-radius: 2px;
            }
            .tm_invoice_btn:hover .tm_btn_text {
                opacity: 1;
                visibility: visible;
            }
            .tm_invoice_btn:not(:last-child) {
                margin-bottom: 3px;
            }
            .tm_invoice_btn.tm_color1 {
                background-color: rgb(242 238 251);
                color: #0a8b4b;
                border-radius: 5px 5px 0 0;
            }
            .tm_invoice_btn.tm_color1:hover {
                background-color: rgba(0, 122, 255, 0.2);
            }
            .tm_invoice_btn.tm_color2 {
                background-color: rgba(52, 199, 89, 0.1);
                color: #34c759;
                border-radius: 0 0 5px 5px;
            }
            .tm_invoice_btn.tm_color2:hover {
                background-color: rgba(52, 199, 89, 0.2);
            }
        }
        @media (max-width: 999px) {
            .tm_invoice_btns {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-top: 0px;
                margin-top: 20px;
                -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                border: 3px solid #fff;
                border-radius: 6px;
                background-color: #fff;
                position: relative;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }
            .tm_invoice_btn {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                border: none;
                font-weight: 600;
                cursor: pointer;
                padding: 0;
                background-color: transparent;
                position: relative;
                border-radius: 5px;
                padding: 6px 15px;
            }
            .tm_invoice_btn svg {
                width: 24px;
            }
            .tm_invoice_btn .tm_btn_icon {
                padding: 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-right: 8px;
            }
            .tm_invoice_btn:not(:last-child) {
                margin-right: 3px;
            }
            .tm_invoice_btn.tm_color1 {
                background-color: rgb(242 238 251);
                color: #0a8b4b;
            }
            .tm_invoice_btn.tm_color1:hover {
                background-color: rgba(0, 122, 255, 0.2);
            }
            .tm_invoice_btn.tm_color2 {
                background-color: rgba(52, 199, 89, 0.1);
                color: #34c759;
            }
            .tm_invoice_btn.tm_color2:hover {
                background-color: rgba(52, 199, 89, 0.2);
            }
        }
        @media (max-width: 767px) {
            .tm_col_4 {
                grid-template-columns: repeat(1, 1fr);
            }
            .tm_col_2_md {
                grid-template-columns: repeat(2, 1fr);
            }
            .tm_m0_md {
                margin: 0;
            }
            .tm_mb10_md {
                margin-bottom: 10px;
            }
            .tm_mb15_md {
                margin-bottom: 15px;
            }
            .tm_mb20_md {
                margin-bottom: 20px;
            }
            .tm_mobile_hide {
                display: none;
            }
            .tm_invoice {
                padding: 30px 20px;
            }
            .tm_invoice .tm_right_footer {
                width: 100%;
            }
            .tm_invoice_footer {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }
            .tm_invoice_footer .tm_left_footer {
                width: 100%;
                border-top: 1px solid #dbdfea;
                margin-top: -1px;
                padding: 15px 0;
            }
            .tm_invoice.tm_style2 .tm_card_note {
                margin-top: 0;
            }
            .tm_note.tm_text_center {
                text-align: left;
            }
            .tm_note.tm_text_center p br {
                display: none;
            }
            .tm_invoice_footer.tm_type1 {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style2 .tm_invoice_head {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style2 .tm_invoice_head > * {
                width: 100%;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_invoice_left {
                margin-bottom: 15px;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_text_right {
                text-align: left;
            }
            .tm_invoice.tm_style2 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style2 .tm_invoice_info > * {
                width: 100%;
            }
            .tm_invoice.tm_style1.tm_type1 {
                padding: 30px 20px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                height: initial;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding-left: 15px;
                padding-right: 15px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                width: 100%;
                -webkit-transform: initial;
                transform: initial;
                right: 0;
                top: 0;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                max-height: 60px;
            }
            .tm_invoice.tm_style2.tm_type1 {
                border-width: 20px 0 0;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                width: 250px;
                height: 80px;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_invoice_head .tm_text_center {
                text-align: left;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_logo {
                top: 12px;
                margin-bottom: 35px;
            }
            img{
                max-width:80%;
            }
            .tm_invoice.tm_style2 .tm_invoice_info_in {
                padding: 12px 15px;
            }
            .tm_border_none_md {
                border: none !important;
            }
            .tm_border_left_none_md {
                border-left-width: 0;
            }
            .tm_border_right_none_md {
                border-right-width: 0;
            }
            .tm_padd_left_15_md {
                padding-left: 15px !important;
            }
            .tm_invoice.tm_style2 .tm_logo img {
                max-height: 50px;
            }
            .tm_curve_35 {
                -webkit-transform: skewX(0deg);
                transform: skewX(0deg);
                margin-left: 0;
                margin-right: 0;
            }
            .tm_curve_35 > * {
                -webkit-transform: inherit;
                transform: inherit;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator,
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                -webkit-transform: initial;
                transform: initial;
            }
            .tm_section_heading .tm_curve_35 {
                margin-left: 0;
            }
            .tm_shape_2.tm_type1 {
                display: none;
            }
            .tm_invoice.tm_style3 .tm_invoice_info {
                padding: 0px 20px 40px;
            }
            .tm_invoice.tm_style3 .tm_invoice_details {
                padding: 0px 20px 50px;
            }
            .tm_invoice.tm_style3 .tm_invoice_head {
                padding: 60px 20px;
            }
            .tm_invoice.tm_style3 .tm_watermark_title {
                letter-spacing: 5px;
                font-size: 20vw;
                padding: 27px 20px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                line-height: 1em;
            }
        }
        @media (max-width: 500px) {
            .tm_border_none_sm {
                border: none !important;
            }
            .tm_flex_column_sm {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_align_start_sm {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
            }
            .tm_m0_sm {
                margin-bottom: 0;
            }
            .tm_invoice.tm_style1 .tm_logo {
                margin-bottom: 10px;
            }
            .tm_invoice.tm_style1 .tm_invoice_head {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_left,
            .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right {
                width: 100%;
            }
            .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right {
                text-align: left;
            }
            .tm_list.tm_style2 li {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_list.tm_style2 li > * {
                padding: 5px 20px;
            }
            .tm_col_2,
            .tm_col_3 {
                grid-template-columns: repeat(1, 1fr);
            }
            .tm_col_2_sm {
                grid-template-columns: repeat(2, 1fr);
            }
            .tm_table.tm_style1.tm_type1 {
                padding: 0px 20px;
            }
            .tm_box2_wrap {
                grid-template-columns: repeat(1, 1fr);
            }
            .tm_box.tm_style1.tm_type1 {
                max-width: 100%;
                width: 100%;
            }
            .tm_invoice.tm_style1 .tm_invoice_left {
                max-width: 100%;
            }
            .tm_f50 {
                font-size: 30px;
            }
            .tm_invoice.tm_style1 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }
            .tm_invoice.tm_style1 .tm_invoice_seperator {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 100%;
                margin-right: 0;
                min-height: 5px;
            }
            .tm_invoice.tm_style1 .tm_invoice_info_list {
                width: 100%;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            .tm_invoice.tm_style1 .tm_invoice_seperator + .tm_invoice_info_list {
                margin-bottom: 5px;
            }
            .tm_f30 {
                font-size: 22px;
            }
            .tm_invoice.tm_style1 .tm_box_3 {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style1 .tm_box_3 span br {
                display: none;
            }
            .tm_invoice.tm_style1 .tm_box_3 > *:not(:last-child) {
                margin-bottom: 15px;
            }
            .tm_invoice.tm_style1 .tm_box_3 ul li {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .tm_invoice.tm_style1 .tm_box_3 ul li:not(:last-child) {
                margin-bottom: 5px;
            }
            .tm_invoice.tm_style3 .tm_watermark_title {
                font-size: 18.4vw;
                padding: 10px 15px;
                top: 0;
                -webkit-transform: initial;
                transform: initial;
                line-height: 1em;
            }
            .tm_invoice.tm_style3 .tm_invoice_head,
            .tm_invoice.tm_style3 .tm_invoice_info {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
            }
            .tm_invoice.tm_style3 .tm_invoice_right {
                margin-top: 30px;
            }
            .tm_invoice.tm_style3 .tm_text_right {
                text-align: left;
            }
            .tm_invoice.tm_style3 .tm_invoice_info_right {
                margin-top: 20px;
            }
            .tm_invoice.tm_style3 .tm_table.tm_style1 {
                margin-bottom: 10px;
            }
        }
        /*--------------------------------------------------------------
          Will apply only print window
        ----------------------------------------------------------------*/
        @media print {
            .tm_gray_bg {
                background-color: #f5f6fa !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_ternary_bg {
                background-color: #b5b5b5 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_primary_bg {
                background-color: #111 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_secondary_bg {
                background-color: #666 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_bg {
                background-color: #0a8b4b;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_bg_10 {
                background-color: rgb(248, 248, 248) !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_bg_20 {
                background-color: rgba(0, 122, 255, 0.15) !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_white_color {
                color: #fff !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_accent_color {
                color: #0a8b4b !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_ternary_color {
                color: #b5b5b5 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_hide_print {
                display: none !important;
            }
            .tm_dark_invoice .tm_gray_bg {
                background-color: #111 !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_dark_invoice {
                background: #111 !important;
                color: rgba(255, 255, 255, 0.65) !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_dark_invoice .tm_gray_bg {
                background: rgba(255, 255, 255, 0.05) !important;
                -webkit-print-color-adjust: exact;
            }
            hr {
                background: #dbdfea !important;
                -webkit-print-color-adjust: exact;
            }
            .tm_col_4,
            .tm_col_4.tm_col_2_md {
                grid-template-columns: repeat(4, 1fr);
            }
            .tm_col_2_md {
                grid-template-columns: repeat(2, 1fr);
            }
            .tm_mb1 {
                margin-bottom: 1px;
            }
            .tm_mb2 {
                margin-bottom: 2px;
            }
            .tm_mb3 {
                margin-bottom: 3px;
            }
            .tm_mb4 {
                margin-bottom: 4px;
            }
            .tm_mb5 {
                margin-bottom: 5px;
            }
            .tm_mb6 {
                margin-bottom: 6px;
            }
            .tm_mb7 {
                margin-bottom: 7px;
            }
            .tm_mb8 {
                margin-bottom: 8px;
            }
            .tm_mb9 {
                margin-bottom: 9px;
            }
            .tm_mb10 {
                margin-bottom: 10px;
            }
            .tm_mb11 {
                margin-bottom: 11px;
            }
            .tm_mb12 {
                margin-bottom: 12px;
            }
            .tm_mb13 {
                margin-bottom: 13px;
            }
            .tm_mb14 {
                margin-bottom: 14px;
            }
            .tm_mb15 {
                margin-bottom: 15px;
            }
            .tm_mb16 {
                margin-bottom: 16px;
            }
            .tm_mb17 {
                margin-bottom: 17px;
            }
            .tm_mb18 {
                margin-bottom: 18px;
            }
            .tm_mb19 {
                margin-bottom: 19px;
            }
            .tm_mb20 {
                margin-bottom: 20px;
            }
            .tm_mb21 {
                margin-bottom: 21px;
            }
            .tm_mb22 {
                margin-bottom: 22px;
            }
            .tm_mb23 {
                margin-bottom: 23px;
            }
            .tm_mb24 {
                margin-bottom: 24px;
            }
            .tm_mb25 {
                margin-bottom: 25px;
            }
            .tm_mb26 {
                margin-bottom: 26px;
            }
            .tm_mb27 {
                margin-bottom: 27px;
            }
            .tm_mb28 {
                margin-bottom: 28px;
            }
            .tm_mb29 {
                margin-bottom: 29px;
            }
            .tm_mb30 {
                margin-bottom: 30px;
            }
            .tm_mb40 {
                margin-bottom: 40px;
            }
            .tm_mobile_hide {
                display: block;
            }
            .tm_invoice {
                padding: 10px;
            }
            .tm_invoice .tm_right_footer {
                width: 42%;
            }
            .tm_invoice_footer {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice_footer .tm_left_footer {
                width: 58%;
                padding: 10px 15px;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                border-top: none;
                margin-top: 0px;
            }
            .tm_invoice.tm_style2 .tm_card_note {
                margin-top: 5px;
            }
            .tm_note.tm_text_center {
                text-align: center;
            }
            .tm_note.tm_text_center p br {
                display: initial;
            }
            .tm_invoice_footer.tm_type1 {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_head {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_head > .tm_invoice_left {
                width: 30%;
            }
            .tm_invoice.tm_style2 .tm_invoice_head > .tm_invoice_right {
                width: 70%;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_invoice_left {
                margin-bottom: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_head .tm_text_right {
                text-align: right;
            }
            .tm_invoice.tm_style2 .tm_invoice_info {
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_info > .tm_invoice_info_left {
                width: 30%;
            }
            .tm_invoice.tm_style2 .tm_invoice_info > .tm_invoice_info_right {
                width: 70%;
            }
            .tm_invoice.tm_style1.tm_type1 {
                padding: 0px 20px 30px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                height: 110px;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                padding: 4px 0;
                -webkit-box-orient: initial;
                -webkit-box-direction: initial;
                -ms-flex-direction: initial;
                flex-direction: initial;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                top: initial;
                margin-right: 0;
                border-radius: 0;
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                position: absolute;
                height: 100%;
                width: 57.5%;
                right: -60px;
                overflow: hidden;
                border: none;
            }
            .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                max-height: 70px;
            }
            .tm_invoice.tm_style2.tm_type1 {
                border-width: 20px 0 0;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                height: 100%;
                width: 42%;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_invoice_head .tm_text_center {
                text-align: center;
            }
            .tm_invoice.tm_style2.tm_type1 .tm_logo {
                top: initial;
                margin-bottom: initial;
            }
            .tm_invoice.tm_style2 .tm_invoice_info_in {
                padding: 12px 20px;
            }
            .tm_invoice.tm_style2 .tm_logo img {
                max-height: 60px;
            }
            .tm_curve_35 {
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                margin-left: 22px;
                margin-right: 22px;
            }
            .tm_curve_35 > * {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
            }
            .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                -webkit-transform: skewX(-35deg) translateX(-45px);
                transform: skewX(-35deg) translateX(-45px);
            }
            .tm_section_heading .tm_curve_35 {
                margin-left: 12px;
            }
            .tm_round_border {
                border-top-width: 2px;
            }
            .tm_border_left_none_md {
                border-left-width: 1px;
            }
            .tm_border_right_none_md {
                border-right-width: 1px;
            }
            .tm_note {
                margin-top: 30px;
            }
            .tm_pagebreak {
                page-break-before: always;
            }
            .tm_invoice.tm_style3 {
                padding: 0;
            }
            .tm_invoice.tm_style3 .tm_invoice_info {
                padding: 0px 15px 40px;
            }
            .tm_invoice.tm_style3 .tm_invoice_details {
                padding: 0px 15px 50px;
            }
            .tm_invoice.tm_style3 .tm_invoice_head {
                padding: 60px 15px;
            }
            .tm_invoice.tm_style3 .tm_watermark_title {
                letter-spacing: 5px;
                font-size: 150px;
                padding: 27px 15px 27px 15px;
            }
        }/*# sourceMappingURL=style.css.map */
        .cust_authorized{
            display: flex;
            align-items: center;
            justify-content: end;
        }

    </style>
</head>

<body>
    
<div class="tm_container">
    <div class="tm_invoice_wrap">
        <div class="tm_invoice tm_style2 tm_type1 tm_accent_border tm_radius_0 tm_small_border" id="tm_download_section">
            <div class="tm_invoice_in">
                <div class="tm_invoice_head tm_mb20 tm_m0_md">
                    <div class="tm_invoice_left">
                        <div class="tm_logo logo-width"><img src="data:image/png;base64,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" width="150" alt="Logo" /></div>
                    </div>
                    <div class="tm_invoice_right" style="width:70%;margin-left:10px;">
                        <div class="tm_grid_row tm_col_12">
                            <div class="tm_f14">
                                <b>{{ env('COMPANY_NAME') }}</b><br />
                                {{ env('COMPANY_ADDRESS') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tm_invoice_info tm_mb30 tm_align_center">
                    <div class="tm_invoice_left" style="width:30%;">
                        <div class="tm_f14">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">Invoice No: </b>{{ $inv_prefix.$inv_number }} <br />
                                <b class="tm_primary_color">Invoice Date: </b>{{ displayDate($inv_date) }}
                            </p>
                        </div>
                    </div>
                    <div class="tm_invoice_right" style="width:37%;">
                        <div class="tm_f14">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">CIN No: </b> {{ env('CIN_NO') }}<br />
                                <b class="tm_primary_color">GST No: </b> {{ env(key: 'GST_NO') }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="tm_f14">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">Mobile: </b> {{ env('COMPANY_MOBILE') }}<br />
                                <b class="tm_primary_color">Email: </b> {{ env('INFO_EMAIL') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="tm_f16 tm_section_heading tm_accent_border_20 tm_mb0">
                <span class="tm_accent_bg_10 tm_radius_0 tm_curve_35 tm_border tm_accent_border_20 tm_border_bottom_0 tm_accent_color"><span>Invoice To</span></span>
            </h2>
            <div class="tm_table tm_style1 tm_mb30">
                <div class="tm_border tm_accent_border_20 tm_border_top_0">
                    <div class="tm_table_responsive">
                        <table>
                            <tbody>
                            <tr>
                                <td class="tm_width_6 tm_border_top_0 tm_f14"><b class="tm_primary_color tm_medium">Name: </b>{{ $fullname }}</td>
                                <td class="tm_width_6 tm_border_top_0 tm_border_left tm_accent_border_20 tm_f14"><b class="tm_primary_color tm_medium">Phone: </b> {{ $mobile }}</td>
                            </tr>
                            <tr>
                                <td class="tm_width_6 tm_accent_border_20 tm_f14"><b class="tm_primary_color tm_medium">Email: </b>{{ $email }}</td>
                                <td class="tm_width_6 tm_border_left tm_accent_border_20 tm_f14"><b class="tm_primary_color tm_medium">Address: </b>{{ $city != '' || (($city != null) ? $city : 'N/A') }},{{ $state != '' || (($state != null) ? $state : 'N/A') }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tm_table tm_style1">
                <div class="tm_border tm_accent_border_20">
                    <div class="tm_table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="tm_width_3 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">#</th>
                                <th class="tm_width_4 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">Item</th>
                                <th class="tm_width_1 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">Qty</th>
                                <th class="tm_width_2 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_f14">Amount(Rs.)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tm_width_2 tm_accent_border_20 tm_f14">1</td>
                                <td class="tm_width_5 tm_accent_border_20 tm_f14">
                                    <b>{{ (($acc_type == 1) ? 'Self Apply' : 'Loan Agent') }}</b><br />
                                    <span class="tm_f12">Number - {{ $card_number }}</span><br />
                                    <span class="tm_f12">Validity - {{ displayDate($registration_date)." to ".displayDate($expiry_date) }}</span>
                                </td>
                                <td class="tm_width_1 tm_accent_border_20 tm_f14">1</td>
                                <td class="tm_width_2 tm_accent_border_20 tm_text_right tm_f14">{{ formatePriceIndia($inv_price) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tm_invoice_footer tm_mb15 tm_m0_md">
                    <div class="tm_left_footer tm_note">
                        <p class="tm_mb2"><b class="tm_primary_color">Payment Details</b></p>
                        <p class="tm_m0 tm_f12">
                            Payment Method: Online Payment <br />
                            Payment Id: {{ $paymentid }}
                        </p>
                    </div>
                    <div class="tm_right_footer">
                        <table class="tm_mb15 tm_m0_md">
                            <tbody>
                            <tr>
                                <td class="tm_width_3 tm_primary_color tm_border_none tm_medium tm_f14">Subtoal</td>
                                <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_medium tm_f14">Rs.{{ formatePriceIndia($inv_price) }}</td>
                            </tr>
                            @if($inv_cgst > 0)
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0 tm_f14">+ 9% CGST</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_f14 tm_pt0">Rs.{{ formatePriceIndia($inv_cgst) }}</td>
                                </tr>
                            @endif
                            @if($inv_sgst > 0)
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0 tm_f14">+ 9% SGST</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_f14 tm_pt0">Rs.{{ formatePriceIndia($inv_sgst) }}</td>
                                </tr>
                            @endif
                            @if($inv_igst > 0)
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0 tm_f14">+ 18% IGST</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_f14 tm_pt0">Rs.{{ formatePriceIndia($inv_igst) }}</td>
                                </tr>
                            @endif
                            <tr class="tm_accent_border_20 tm_border">
                                <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_accent_bg_10">Grand Total</td>
                                <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_text_right tm_accent_bg_10">Rs.{{ formatePriceIndia($inv_grandtotal) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tm_invoice_footer tm_type1">
                    <div class="tm_left_footer">
                        <p class="tm_mb2"><b class="tm_primary_color">Note</b></p>
                        <p class="tm_m0 tm_f12">
                            Payment is refundable only in accordance with the company's <br />
                            Cancellation & Refund Policy.
                        </p>
                    </div>
                    <div class="tm_right_footer cust_authorized">
                        <div class="tm_sign tm_text_center">
                            <p class="tm_m0 tm_ternary_color">{{ env('COMPANY_NAME') }}</p>
                            <p class="tm_m0 tm_12 tm_primary_color">Authorized Person</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm_bottom_invoice tm_accent_border_20">
                <div class="tm_bottom_invoice_center">
                    <p class="tm_m0 tm_f12">This is Computer generated Invoice. Does not require any signature.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="tm_invoice_btns tm_hide_print">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path>
                            <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect>
                            <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path>
                            <circle cx="392" cy="184" r="24" fill="currentColor"></circle>
                        </svg>
                    </span>
            <span class="tm_btn_text">Print</span>
        </a>
    </div>
</div>
</body>
</html>
