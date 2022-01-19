<?php
session_start();
if(isset($_SESSION['name'])){

?>
<style>
/*
 * Bootstrap v3.3.2 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
*/

.bootstrap-iso {
  /*! normalize.css v3.0.2 | MIT License | git.io/normalize */
  /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
}

.bootstrap-iso {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

.bootstrap-iso body {
  margin: ;
}
.bootstrap-iso article,
.bootstrap-iso aside,
.bootstrap-iso details,
.bootstrap-iso figcaption,
.bootstrap-iso figure,
.bootstrap-iso footer,
.bootstrap-iso header,
.bootstrap-iso hgroup,
.bootstrap-iso main,
.bootstrap-iso menu,
.bootstrap-iso nav,
.bootstrap-iso section,
.bootstrap-iso summary {
  display: block;
}
.bootstrap-iso audio,
.bootstrap-iso canvas,
.bootstrap-iso progress,
.bootstrap-iso video {
  display: inline-block;
  vertical-align: baseline;
}
.bootstrap-iso audio:not([controls]) {
  display: none;
  height: 0;
}
.bootstrap-iso [hidden],
.bootstrap-iso template {
  display: none;
}
.bootstrap-iso a {
  background-color: transparent;
}
.bootstrap-iso a:active,
.bootstrap-iso a:hover {
  outline: 0;
}
.bootstrap-iso abbr[title] {
  border-bottom: 1px dotted;
}
.bootstrap-iso b,
.bootstrap-iso strong {
  font-weight: bold;
}
.bootstrap-iso dfn {
  font-style: italic;
}
.bootstrap-iso h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
.bootstrap-iso mark {
  background: #ff0;
  color: #000;
}
.bootstrap-iso small {
  font-size: 80%;
}
.bootstrap-iso sub,
.bootstrap-iso sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
.bootstrap-iso sup {
  top: -0.5em;
}
.bootstrap-iso sub {
  bottom: -0.25em;
}
.bootstrap-iso img {
  border: 0;
}
.bootstrap-iso svg:not(:root) {
  overflow: hidden;
}
.bootstrap-iso figure {
  margin: 1em 40px;
}
.bootstrap-iso hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
.bootstrap-iso pre {
  overflow: auto;
}
.bootstrap-iso code,
.bootstrap-iso kbd,
.bootstrap-iso pre,
.bootstrap-iso samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
.bootstrap-iso button,
.bootstrap-iso input,
.bootstrap-iso optgroup,
.bootstrap-iso select,
.bootstrap-iso textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
.bootstrap-iso button {
  overflow: visible;
}
.bootstrap-iso button,
.bootstrap-iso select {
  text-transform: none;
}
.bootstrap-iso button,
.bootstrap-iso html input[type="button"],
.bootstrap-iso input[type="reset"],
.bootstrap-iso input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
.bootstrap-iso button[disabled],
.bootstrap-iso html input[disabled] {
  cursor: default;
}
.bootstrap-iso button::-moz-focus-inner,
.bootstrap-iso input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.bootstrap-iso input {
  line-height: normal;
}
.bootstrap-iso input[type="checkbox"],
.bootstrap-iso input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
.bootstrap-iso input[type="number"]::-webkit-inner-spin-button,
.bootstrap-iso input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
.bootstrap-iso input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
.bootstrap-iso input[type="search"]::-webkit-search-cancel-button,
.bootstrap-iso input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
.bootstrap-iso fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
.bootstrap-iso legend {
  border: 0;
  padding: 0;
}
.bootstrap-iso textarea {
  overflow: auto;
}
.bootstrap-iso optgroup {
  font-weight: bold;
}
.bootstrap-iso table {
  border-collapse: collapse;
  border-spacing: 0;
}
.bootstrap-iso td,
.bootstrap-iso th {
  padding: 0;
}
@media print {
  .bootstrap-iso *,
  .bootstrap-iso *:before,
  .bootstrap-iso *:after {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  .bootstrap-iso a,
  .bootstrap-iso a:visited {
    text-decoration: underline;
  }
  .bootstrap-iso a[href]:after {
    content: " (" attr(href) ")";
  }
  .bootstrap-iso abbr[title]:after {
    content: " (" attr(title) ")";
  }
  .bootstrap-iso a[href^="#"]:after,
  .bootstrap-iso a[href^="javascript:"]:after {
    content: "";
  }
  .bootstrap-iso pre,
  .bootstrap-iso blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  .bootstrap-iso thead {
    display: table-header-group;
  }
  .bootstrap-iso tr,
  .bootstrap-iso img {
    page-break-inside: avoid;
  }
  .bootstrap-iso img {
    max-width: 100% !important;
  }
  .bootstrap-iso p,
  .bootstrap-iso h2,
  .bootstrap-iso h3 {
    orphans: 3;
    widows: 3;
  }
  .bootstrap-iso h2,
  .bootstrap-iso h3 {
    page-break-after: avoid;
  }
  .bootstrap-iso select {
    background: #fff !important;
  }
  .bootstrap-iso .navbar {
    display: none;
  }
  .bootstrap-iso .btn > .caret,
  .bootstrap-iso .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .bootstrap-iso .label {
    border: 1px solid #000;
  }
  .bootstrap-iso .table {
    border-collapse: collapse !important;
  }
  .bootstrap-iso .table td,
  .bootstrap-iso .table th {
    background-color: #fff !important;
  }
  .bootstrap-iso .table-bordered th,
  .bootstrap-iso .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.bootstrap-iso .glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.bootstrap-iso .glyphicon-asterisk:before {
  content: "\2a";
}
.bootstrap-iso .glyphicon-plus:before {
  content: "\2b";
}
.bootstrap-iso .glyphicon-euro:before,
.bootstrap-iso .glyphicon-eur:before {
  content: "\20ac";
}
.bootstrap-iso .glyphicon-minus:before {
  content: "\2212";
}
.bootstrap-iso .glyphicon-cloud:before {
  content: "\2601";
}
.bootstrap-iso .glyphicon-envelope:before {
  content: "\2709";
}
.bootstrap-iso .glyphicon-pencil:before {
  content: "\270f";
}
.bootstrap-iso .glyphicon-glass:before {
  content: "\e001";
}
.bootstrap-iso .glyphicon-music:before {
  content: "\e002";
}
.bootstrap-iso .glyphicon-search:before {
  content: "\e003";
}
.bootstrap-iso .glyphicon-heart:before {
  content: "\e005";
}
.bootstrap-iso .glyphicon-star:before {
  content: "\e006";
}
.bootstrap-iso .glyphicon-star-empty:before {
  content: "\e007";
}
.bootstrap-iso .glyphicon-user:before {
  content: "\e008";
}
.bootstrap-iso .glyphicon-film:before {
  content: "\e009";
}
.bootstrap-iso .glyphicon-th-large:before {
  content: "\e010";
}
.bootstrap-iso .glyphicon-th:before {
  content: "\e011";
}
.bootstrap-iso .glyphicon-th-list:before {
  content: "\e012";
}
.bootstrap-iso .glyphicon-ok:before {
  content: "\e013";
}
.bootstrap-iso .glyphicon-remove:before {
  content: "\e014";
}
.bootstrap-iso .glyphicon-zoom-in:before {
  content: "\e015";
}
.bootstrap-iso .glyphicon-zoom-out:before {
  content: "\e016";
}
.bootstrap-iso .glyphicon-off:before {
  content: "\e017";
}
.bootstrap-iso .glyphicon-signal:before {
  content: "\e018";
}
.bootstrap-iso .glyphicon-cog:before {
  content: "\e019";
}
.bootstrap-iso .glyphicon-trash:before {
  content: "\e020";
}
.bootstrap-iso .glyphicon-home:before {
  content: "\e021";
}
.bootstrap-iso .glyphicon-file:before {
  content: "\e022";
}
.bootstrap-iso .glyphicon-time:before {
  content: "\e023";
}
.bootstrap-iso .glyphicon-road:before {
  content: "\e024";
}
.bootstrap-iso .glyphicon-download-alt:before {
  content: "\e025";
}
.bootstrap-iso .glyphicon-download:before {
  content: "\e026";
}
.bootstrap-iso .glyphicon-upload:before {
  content: "\e027";
}
.bootstrap-iso .glyphicon-inbox:before {
  content: "\e028";
}
.bootstrap-iso .glyphicon-play-circle:before {
  content: "\e029";
}
.bootstrap-iso .glyphicon-repeat:before {
  content: "\e030";
}
.bootstrap-iso .glyphicon-refresh:before {
  content: "\e031";
}
.bootstrap-iso .glyphicon-list-alt:before {
  content: "\e032";
}
.bootstrap-iso .glyphicon-lock:before {
  content: "\e033";
}
.bootstrap-iso .glyphicon-flag:before {
  content: "\e034";
}
.bootstrap-iso .glyphicon-headphones:before {
  content: "\e035";
}
.bootstrap-iso .glyphicon-volume-off:before {
  content: "\e036";
}
.bootstrap-iso .glyphicon-volume-down:before {
  content: "\e037";
}
.bootstrap-iso .glyphicon-volume-up:before {
  content: "\e038";
}
.bootstrap-iso .glyphicon-qrcode:before {
  content: "\e039";
}
.bootstrap-iso .glyphicon-barcode:before {
  content: "\e040";
}
.bootstrap-iso .glyphicon-tag:before {
  content: "\e041";
}
.bootstrap-iso .glyphicon-tags:before {
  content: "\e042";
}
.bootstrap-iso .glyphicon-book:before {
  content: "\e043";
}
.bootstrap-iso .glyphicon-bookmark:before {
  content: "\e044";
}
.bootstrap-iso .glyphicon-print:before {
  content: "\e045";
}
.bootstrap-iso .glyphicon-camera:before {
  content: "\e046";
}
.bootstrap-iso .glyphicon-font:before {
  content: "\e047";
}
.bootstrap-iso .glyphicon-bold:before {
  content: "\e048";
}
.bootstrap-iso .glyphicon-italic:before {
  content: "\e049";
}
.bootstrap-iso .glyphicon-text-height:before {
  content: "\e050";
}
.bootstrap-iso .glyphicon-text-width:before {
  content: "\e051";
}
.bootstrap-iso .glyphicon-align-left:before {
  content: "\e052";
}
.bootstrap-iso .glyphicon-align-center:before {
  content: "\e053";
}
.bootstrap-iso .glyphicon-align-right:before {
  content: "\e054";
}
.bootstrap-iso .glyphicon-align-justify:before {
  content: "\e055";
}
.bootstrap-iso .glyphicon-list:before {
  content: "\e056";
}
.bootstrap-iso .glyphicon-indent-left:before {
  content: "\e057";
}
.bootstrap-iso .glyphicon-indent-right:before {
  content: "\e058";
}
.bootstrap-iso .glyphicon-facetime-video:before {
  content: "\e059";
}
.bootstrap-iso .glyphicon-picture:before {
  content: "\e060";
}
.bootstrap-iso .glyphicon-map-marker:before {
  content: "\e062";
}
.bootstrap-iso .glyphicon-adjust:before {
  content: "\e063";
}
.bootstrap-iso .glyphicon-tint:before {
  content: "\e064";
}
.bootstrap-iso .glyphicon-edit:before {
  content: "\e065";
}
.bootstrap-iso .glyphicon-share:before {
  content: "\e066";
}
.bootstrap-iso .glyphicon-check:before {
  content: "\e067";
}
.bootstrap-iso .glyphicon-move:before {
  content: "\e068";
}
.bootstrap-iso .glyphicon-step-backward:before {
  content: "\e069";
}
.bootstrap-iso .glyphicon-fast-backward:before {
  content: "\e070";
}
.bootstrap-iso .glyphicon-backward:before {
  content: "\e071";
}
.bootstrap-iso .glyphicon-play:before {
  content: "\e072";
}
.bootstrap-iso .glyphicon-pause:before {
  content: "\e073";
}
.bootstrap-iso .glyphicon-stop:before {
  content: "\e074";
}
.bootstrap-iso .glyphicon-forward:before {
  content: "\e075";
}
.bootstrap-iso .glyphicon-fast-forward:before {
  content: "\e076";
}
.bootstrap-iso .glyphicon-step-forward:before {
  content: "\e077";
}
.bootstrap-iso .glyphicon-eject:before {
  content: "\e078";
}
.bootstrap-iso .glyphicon-chevron-left:before {
  content: "\e079";
}
.bootstrap-iso .glyphicon-chevron-right:before {
  content: "\e080";
}
.bootstrap-iso .glyphicon-plus-sign:before {
  content: "\e081";
}
.bootstrap-iso .glyphicon-minus-sign:before {
  content: "\e082";
}
.bootstrap-iso .glyphicon-remove-sign:before {
  content: "\e083";
}
.bootstrap-iso .glyphicon-ok-sign:before {
  content: "\e084";
}
.bootstrap-iso .glyphicon-question-sign:before {
  content: "\e085";
}
.bootstrap-iso .glyphicon-info-sign:before {
  content: "\e086";
}
.bootstrap-iso .glyphicon-screenshot:before {
  content: "\e087";
}
.bootstrap-iso .glyphicon-remove-circle:before {
  content: "\e088";
}
.bootstrap-iso .glyphicon-ok-circle:before {
  content: "\e089";
}
.bootstrap-iso .glyphicon-ban-circle:before {
  content: "\e090";
}
.bootstrap-iso .glyphicon-arrow-left:before {
  content: "\e091";
}
.bootstrap-iso .glyphicon-arrow-right:before {
  content: "\e092";
}
.bootstrap-iso .glyphicon-arrow-up:before {
  content: "\e093";
}
.bootstrap-iso .glyphicon-arrow-down:before {
  content: "\e094";
}
.bootstrap-iso .glyphicon-share-alt:before {
  content: "\e095";
}
.bootstrap-iso .glyphicon-resize-full:before {
  content: "\e096";
}
.bootstrap-iso .glyphicon-resize-small:before {
  content: "\e097";
}
.bootstrap-iso .glyphicon-exclamation-sign:before {
  content: "\e101";
}
.bootstrap-iso .glyphicon-gift:before {
  content: "\e102";
}
.bootstrap-iso .glyphicon-leaf:before {
  content: "\e103";
}
.bootstrap-iso .glyphicon-fire:before {
  content: "\e104";
}
.bootstrap-iso .glyphicon-eye-open:before {
  content: "\e105";
}
.bootstrap-iso .glyphicon-eye-close:before {
  content: "\e106";
}
.bootstrap-iso .glyphicon-warning-sign:before {
  content: "\e107";
}
.bootstrap-iso .glyphicon-plane:before {
  content: "\e108";
}
.bootstrap-iso .glyphicon-calendar:before {
  content: "\e109";
}
.bootstrap-iso .glyphicon-random:before {
  content: "\e110";
}
.bootstrap-iso .glyphicon-comment:before {
  content: "\e111";
}
.bootstrap-iso .glyphicon-magnet:before {
  content: "\e112";
}
.bootstrap-iso .glyphicon-chevron-up:before {
  content: "\e113";
}
.bootstrap-iso .glyphicon-chevron-down:before {
  content: "\e114";
}
.bootstrap-iso .glyphicon-retweet:before {
  content: "\e115";
}
.bootstrap-iso .glyphicon-shopping-cart:before {
  content: "\e116";
}
.bootstrap-iso .glyphicon-folder-close:before {
  content: "\e117";
}
.bootstrap-iso .glyphicon-folder-open:before {
  content: "\e118";
}
.bootstrap-iso .glyphicon-resize-vertical:before {
  content: "\e119";
}
.bootstrap-iso .glyphicon-resize-horizontal:before {
  content: "\e120";
}
.bootstrap-iso .glyphicon-hdd:before {
  content: "\e121";
}
.bootstrap-iso .glyphicon-bullhorn:before {
  content: "\e122";
}
.bootstrap-iso .glyphicon-bell:before {
  content: "\e123";
}
.bootstrap-iso .glyphicon-certificate:before {
  content: "\e124";
}
.bootstrap-iso .glyphicon-thumbs-up:before {
  content: "\e125";
}
.bootstrap-iso .glyphicon-thumbs-down:before {
  content: "\e126";
}
.bootstrap-iso .glyphicon-hand-right:before {
  content: "\e127";
}
.bootstrap-iso .glyphicon-hand-left:before {
  content: "\e128";
}
.bootstrap-iso .glyphicon-hand-up:before {
  content: "\e129";
}
.bootstrap-iso .glyphicon-hand-down:before {
  content: "\e130";
}
.bootstrap-iso .glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.bootstrap-iso .glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.bootstrap-iso .glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.bootstrap-iso .glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.bootstrap-iso .glyphicon-globe:before {
  content: "\e135";
}
.bootstrap-iso .glyphicon-wrench:before {
  content: "\e136";
}
.bootstrap-iso .glyphicon-tasks:before {
  content: "\e137";
}
.bootstrap-iso .glyphicon-filter:before {
  content: "\e138";
}
.bootstrap-iso .glyphicon-briefcase:before {
  content: "\e139";
}
.bootstrap-iso .glyphicon-fullscreen:before {
  content: "\e140";
}
.bootstrap-iso .glyphicon-dashboard:before {
  content: "\e141";
}
.bootstrap-iso .glyphicon-paperclip:before {
  content: "\e142";
}
.bootstrap-iso .glyphicon-heart-empty:before {
  content: "\e143";
}
.bootstrap-iso .glyphicon-link:before {
  content: "\e144";
}
.bootstrap-iso .glyphicon-phone:before {
  content: "\e145";
}
.bootstrap-iso .glyphicon-pushpin:before {
  content: "\e146";
}
.bootstrap-iso .glyphicon-usd:before {
  content: "\e148";
}
.bootstrap-iso .glyphicon-gbp:before {
  content: "\e149";
}
.bootstrap-iso .glyphicon-sort:before {
  content: "\e150";
}
.bootstrap-iso .glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.bootstrap-iso .glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.bootstrap-iso .glyphicon-sort-by-order:before {
  content: "\e153";
}
.bootstrap-iso .glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.bootstrap-iso .glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.bootstrap-iso .glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.bootstrap-iso .glyphicon-unchecked:before {
  content: "\e157";
}
.bootstrap-iso .glyphicon-expand:before {
  content: "\e158";
}
.bootstrap-iso .glyphicon-collapse-down:before {
  content: "\e159";
}
.bootstrap-iso .glyphicon-collapse-up:before {
  content: "\e160";
}
.bootstrap-iso .glyphicon-log-in:before {
  content: "\e161";
}
.bootstrap-iso .glyphicon-flash:before {
  content: "\e162";
}
.bootstrap-iso .glyphicon-log-out:before {
  content: "\e163";
}
.bootstrap-iso .glyphicon-new-window:before {
  content: "\e164";
}
.bootstrap-iso .glyphicon-record:before {
  content: "\e165";
}
.bootstrap-iso .glyphicon-save:before {
  content: "\e166";
}
.bootstrap-iso .glyphicon-open:before {
  content: "\e167";
}
.bootstrap-iso .glyphicon-saved:before {
  content: "\e168";
}
.bootstrap-iso .glyphicon-import:before {
  content: "\e169";
}
.bootstrap-iso .glyphicon-export:before {
  content: "\e170";
}
.bootstrap-iso .glyphicon-send:before {
  content: "\e171";
}
.bootstrap-iso .glyphicon-floppy-disk:before {
  content: "\e172";
}
.bootstrap-iso .glyphicon-floppy-saved:before {
  content: "\e173";
}
.bootstrap-iso .glyphicon-floppy-remove:before {
  content: "\e174";
}
.bootstrap-iso .glyphicon-floppy-save:before {
  content: "\e175";
}
.bootstrap-iso .glyphicon-floppy-open:before {
  content: "\e176";
}
.bootstrap-iso .glyphicon-credit-card:before {
  content: "\e177";
}
.bootstrap-iso .glyphicon-transfer:before {
  content: "\e178";
}
.bootstrap-iso .glyphicon-cutlery:before {
  content: "\e179";
}
.bootstrap-iso .glyphicon-header:before {
  content: "\e180";
}
.bootstrap-iso .glyphicon-compressed:before {
  content: "\e181";
}
.bootstrap-iso .glyphicon-earphone:before {
  content: "\e182";
}
.bootstrap-iso .glyphicon-phone-alt:before {
  content: "\e183";
}
.bootstrap-iso .glyphicon-tower:before {
  content: "\e184";
}
.bootstrap-iso .glyphicon-stats:before {
  content: "\e185";
}
.bootstrap-iso .glyphicon-sd-video:before {
  content: "\e186";
}
.bootstrap-iso .glyphicon-hd-video:before {
  content: "\e187";
}
.bootstrap-iso .glyphicon-subtitles:before {
  content: "\e188";
}
.bootstrap-iso .glyphicon-sound-stereo:before {
  content: "\e189";
}
.bootstrap-iso .glyphicon-sound-dolby:before {
  content: "\e190";
}
.bootstrap-iso .glyphicon-sound-5-1:before {
  content: "\e191";
}
.bootstrap-iso .glyphicon-sound-6-1:before {
  content: "\e192";
}
.bootstrap-iso .glyphicon-sound-7-1:before {
  content: "\e193";
}
.bootstrap-iso .glyphicon-copyright-mark:before {
  content: "\e194";
}
.bootstrap-iso .glyphicon-registration-mark:before {
  content: "\e195";
}
.bootstrap-iso .glyphicon-cloud-download:before {
  content: "\e197";
}
.bootstrap-iso .glyphicon-cloud-upload:before {
  content: "\e198";
}
.bootstrap-iso .glyphicon-tree-conifer:before {
  content: "\e199";
}
.bootstrap-iso .glyphicon-tree-deciduous:before {
  content: "\e200";
}
.bootstrap-iso .glyphicon-cd:before {
  content: "\e201";
}
.bootstrap-iso .glyphicon-save-file:before {
  content: "\e202";
}
.bootstrap-iso .glyphicon-open-file:before {
  content: "\e203";
}
.bootstrap-iso .glyphicon-level-up:before {
  content: "\e204";
}
.bootstrap-iso .glyphicon-copy:before {
  content: "\e205";
}
.bootstrap-iso .glyphicon-paste:before {
  content: "\e206";
}
.bootstrap-iso .glyphicon-alert:before {
  content: "\e209";
}
.bootstrap-iso .glyphicon-equalizer:before {
  content: "\e210";
}
.bootstrap-iso .glyphicon-king:before {
  content: "\e211";
}
.bootstrap-iso .glyphicon-queen:before {
  content: "\e212";
}
.bootstrap-iso .glyphicon-pawn:before {
  content: "\e213";
}
.bootstrap-iso .glyphicon-bishop:before {
  content: "\e214";
}
.bootstrap-iso .glyphicon-knight:before {
  content: "\e215";
}
.bootstrap-iso .glyphicon-baby-formula:before {
  content: "\e216";
}
.bootstrap-iso .glyphicon-tent:before {
  content: "\26fa";
}
.bootstrap-iso .glyphicon-blackboard:before {
  content: "\e218";
}
.bootstrap-iso .glyphicon-bed:before {
  content: "\e219";
}
.bootstrap-iso .glyphicon-apple:before {
  content: "\f8ff";
}
.bootstrap-iso .glyphicon-erase:before {
  content: "\e221";
}
.bootstrap-iso .glyphicon-hourglass:before {
  content: "\231b";
}
.bootstrap-iso .glyphicon-lamp:before {
  content: "\e223";
}
.bootstrap-iso .glyphicon-duplicate:before {
  content: "\e224";
}
.bootstrap-iso .glyphicon-piggy-bank:before {
  content: "\e225";
}
.bootstrap-iso .glyphicon-scissors:before {
  content: "\e226";
}
.bootstrap-iso .glyphicon-bitcoin:before {
  content: "\e227";
}
.bootstrap-iso .glyphicon-btc:before {
  content: "\e227";
}
.bootstrap-iso .glyphicon-xbt:before {
  content: "\e227";
}
.bootstrap-iso .glyphicon-yen:before {
  content: "\00a5";
}
.bootstrap-iso .glyphicon-jpy:before {
  content: "\00a5";
}
.bootstrap-iso .glyphicon-ruble:before {
  content: "\20bd";
}
.bootstrap-iso .glyphicon-rub:before {
  content: "\20bd";
}
.bootstrap-iso .glyphicon-scale:before {
  content: "\e230";
}
.bootstrap-iso .glyphicon-ice-lolly:before {
  content: "\e231";
}
.bootstrap-iso .glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.bootstrap-iso .glyphicon-education:before {
  content: "\e233";
}
.bootstrap-iso .glyphicon-option-horizontal:before {
  content: "\e234";
}
.bootstrap-iso .glyphicon-option-vertical:before {
  content: "\e235";
}
.bootstrap-iso .glyphicon-menu-hamburger:before {
  content: "\e236";
}
.bootstrap-iso .glyphicon-modal-window:before {
  content: "\e237";
}
.bootstrap-iso .glyphicon-oil:before {
  content: "\e238";
}
.bootstrap-iso .glyphicon-grain:before {
  content: "\e239";
}
.bootstrap-iso .glyphicon-sunglasses:before {
  content: "\e240";
}
.bootstrap-iso .glyphicon-text-size:before {
  content: "\e241";
}
.bootstrap-iso .glyphicon-text-color:before {
  content: "\e242";
}
.bootstrap-iso .glyphicon-text-background:before {
  content: "\e243";
}
.bootstrap-iso .glyphicon-object-align-top:before {
  content: "\e244";
}
.bootstrap-iso .glyphicon-object-align-bottom:before {
  content: "\e245";
}
.bootstrap-iso .glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.bootstrap-iso .glyphicon-object-align-left:before {
  content: "\e247";
}
.bootstrap-iso .glyphicon-object-align-vertical:before {
  content: "\e248";
}
.bootstrap-iso .glyphicon-object-align-right:before {
  content: "\e249";
}
.bootstrap-iso .glyphicon-triangle-right:before {
  content: "\e250";
}
.bootstrap-iso .glyphicon-triangle-left:before {
  content: "\e251";
}
.bootstrap-iso .glyphicon-triangle-bottom:before {
  content: "\e252";
}
.bootstrap-iso .glyphicon-triangle-top:before {
  content: "\e253";
}
.bootstrap-iso .glyphicon-console:before {
  content: "\e254";
}
.bootstrap-iso .glyphicon-superscript:before {
  content: "\e255";
}
.bootstrap-iso .glyphicon-subscript:before {
  content: "\e256";
}
.bootstrap-iso .glyphicon-menu-left:before {
  content: "\e257";
}
.bootstrap-iso .glyphicon-menu-right:before {
  content: "\e258";
}
.bootstrap-iso .glyphicon-menu-down:before {
  content: "\e259";
}
.bootstrap-iso .glyphicon-menu-up:before {
  content: "\e260";
}
.bootstrap-iso * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-iso *:before,
.bootstrap-iso *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-iso html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.bootstrap-iso{ /* formden change */
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 18px;
  line-height: 1.42857143;
  color: #333333;
  background-color: #ffffff;
}

.bootstrap-iso input,
.bootstrap-iso button,
.bootstrap-iso select,
.bootstrap-iso textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
.bootstrap-iso a {
  color: #337ab7;
  text-decoration: none;
}
.bootstrap-iso a:hover,
.bootstrap-iso a:focus {
  color: #23527c;
  text-decoration: underline;
}
.bootstrap-iso a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bootstrap-iso figure {
  margin: 0;
}
.bootstrap-iso img {
  vertical-align: middle;
}
.bootstrap-iso .img-responsive,
.bootstrap-iso .thumbnail > img,
.bootstrap-iso .thumbnail a > img,
.bootstrap-iso .carousel-inner > .item > img,
.bootstrap-iso .carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.bootstrap-iso .img-rounded {
  border-radius: 6px;
}
.bootstrap-iso .img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.bootstrap-iso .img-circle {
  border-radius: 50%;
}
.bootstrap-iso hr {
  margin-top: 25px;
  margin-bottom: 25px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.bootstrap-iso .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.bootstrap-iso .sr-only-focusable:active,
.bootstrap-iso .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.bootstrap-iso h1,
.bootstrap-iso h2,
.bootstrap-iso h3,
.bootstrap-iso h4,
.bootstrap-iso h5,
.bootstrap-iso h6,
.bootstrap-iso .h1,
.bootstrap-iso .h2,
.bootstrap-iso .h3,
.bootstrap-iso .h4,
.bootstrap-iso .h5,
.bootstrap-iso .h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
.bootstrap-iso h1 small,
.bootstrap-iso h2 small,
.bootstrap-iso h3 small,
.bootstrap-iso h4 small,
.bootstrap-iso h5 small,
.bootstrap-iso h6 small,
.bootstrap-iso .h1 small,
.bootstrap-iso .h2 small,
.bootstrap-iso .h3 small,
.bootstrap-iso .h4 small,
.bootstrap-iso .h5 small,
.bootstrap-iso .h6 small,
.bootstrap-iso h1 .small,
.bootstrap-iso h2 .small,
.bootstrap-iso h3 .small,
.bootstrap-iso h4 .small,
.bootstrap-iso h5 .small,
.bootstrap-iso h6 .small,
.bootstrap-iso .h1 .small,
.bootstrap-iso .h2 .small,
.bootstrap-iso .h3 .small,
.bootstrap-iso .h4 .small,
.bootstrap-iso .h5 .small,
.bootstrap-iso .h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
.bootstrap-iso h1,
.bootstrap-iso .h1,
.bootstrap-iso h2,
.bootstrap-iso .h2,
.bootstrap-iso h3,
.bootstrap-iso .h3 {
  margin-top: 25px;
  margin-bottom: 12.5px;
}
.bootstrap-iso h1 small,
.bootstrap-iso .h1 small,
.bootstrap-iso h2 small,
.bootstrap-iso .h2 small,
.bootstrap-iso h3 small,
.bootstrap-iso .h3 small,
.bootstrap-iso h1 .small,
.bootstrap-iso .h1 .small,
.bootstrap-iso h2 .small,
.bootstrap-iso .h2 .small,
.bootstrap-iso h3 .small,
.bootstrap-iso .h3 .small {
  font-size: 65%;
}
.bootstrap-iso h4,
.bootstrap-iso .h4,
.bootstrap-iso h5,
.bootstrap-iso .h5,
.bootstrap-iso h6,
.bootstrap-iso .h6 {
  margin-top: 12.5px;
  margin-bottom: 12.5px;
}
.bootstrap-iso h4 small,
.bootstrap-iso .h4 small,
.bootstrap-iso h5 small,
.bootstrap-iso .h5 small,
.bootstrap-iso h6 small,
.bootstrap-iso .h6 small,
.bootstrap-iso h4 .small,
.bootstrap-iso .h4 .small,
.bootstrap-iso h5 .small,
.bootstrap-iso .h5 .small,
.bootstrap-iso h6 .small,
.bootstrap-iso .h6 .small {
  font-size: 75%;
}
.bootstrap-iso h1,
.bootstrap-iso .h1 {
  font-size: 46px;
}
.bootstrap-iso h2,
.bootstrap-iso .h2 {
  font-size: 38px;
}
.bootstrap-iso h3,
.bootstrap-iso .h3 {
  font-size: 31px;
}
.bootstrap-iso h4,
.bootstrap-iso .h4 {
  font-size: 23px;
}
.bootstrap-iso h5,
.bootstrap-iso .h5 {
  font-size: 18px;
}
.bootstrap-iso h6,
.bootstrap-iso .h6 {
  font-size: 16px;
}
.bootstrap-iso p {
  margin: 0 0 12.5px;
}
.bootstrap-iso .lead {
  margin-bottom: 25px;
  font-size: 20px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .bootstrap-iso .lead {
    font-size: 27px;
  }
}
.bootstrap-iso small,
.bootstrap-iso .small {
  font-size: 88%;
}
.bootstrap-iso mark,
.bootstrap-iso .mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.bootstrap-iso .text-left {
  text-align: left;
}
.bootstrap-iso .text-right {
  text-align: right;
}
.bootstrap-iso .text-center {
  text-align: center;
}
.bootstrap-iso .text-justify {
  text-align: justify;
}
.bootstrap-iso .text-nowrap {
  white-space: nowrap;
}
.bootstrap-iso .text-lowercase {
  text-transform: lowercase;
}
.bootstrap-iso .text-uppercase {
  text-transform: uppercase;
}
.bootstrap-iso .text-capitalize {
  text-transform: capitalize;
}
.bootstrap-iso .text-muted {
  color: #777777;
}
.bootstrap-iso .text-primary {
  color: #337ab7;
}
.bootstrap-iso a.text-primary:hover {
  color: #286090;
}
.bootstrap-iso .text-success {
  color: #3c763d;
}
.bootstrap-iso a.text-success:hover {
  color: #2b542c;
}
.bootstrap-iso .text-info {
  color: #31708f;
}
.bootstrap-iso a.text-info:hover {
  color: #245269;
}
.bootstrap-iso .text-warning {
  color: #8a6d3b;
}
.bootstrap-iso a.text-warning:hover {
  color: #66512c;
}
.bootstrap-iso .text-danger {
  color: #a94442;
}
.bootstrap-iso a.text-danger:hover {
  color: #843534;
}
.bootstrap-iso .bg-primary {
  color: #fff;
  background-color: #337ab7;
}
.bootstrap-iso a.bg-primary:hover {
  background-color: #286090;
}
.bootstrap-iso .bg-success {
  background-color: #dff0d8;
}
.bootstrap-iso a.bg-success:hover {
  background-color: #c1e2b3;
}
.bootstrap-iso .bg-info {
  background-color: #d9edf7;
}
.bootstrap-iso a.bg-info:hover {
  background-color: #afd9ee;
}
.bootstrap-iso .bg-warning {
  background-color: #fcf8e3;
}
.bootstrap-iso a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bootstrap-iso .bg-danger {
  background-color: #f2dede;
}
.bootstrap-iso a.bg-danger:hover {
  background-color: #e4b9b9;
}
.bootstrap-iso .page-header {
  padding-bottom: 11.5px;
  margin: 50px 0 25px;
  border-bottom: 1px solid #eeeeee;
}
.bootstrap-iso ul,
.bootstrap-iso ol {
  margin-top: 0;
  margin-bottom: 12.5px;
}
.bootstrap-iso ul ul,
.bootstrap-iso ol ul,
.bootstrap-iso ul ol,
.bootstrap-iso ol ol {
  margin-bottom: 0;
}
.bootstrap-iso .list-unstyled {
  padding-left: 0;
  list-style: none;
}
.bootstrap-iso .list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.bootstrap-iso .list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
.bootstrap-iso dl {
  margin-top: 0;
  margin-bottom: 25px;
}
.bootstrap-iso dt,
.bootstrap-iso dd {
  line-height: 1.42857143;
}
.bootstrap-iso dt {
  font-weight: bold;
}
.bootstrap-iso dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .bootstrap-iso .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .bootstrap-iso .dl-horizontal dd {
    margin-left: 180px;
  }
}
.bootstrap-iso abbr[title],
.bootstrap-iso abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.bootstrap-iso .initialism {
  font-size: 90%;
  text-transform: uppercase;
}
.bootstrap-iso blockquote {
  padding: 12.5px 25px;
  margin: 0 0 25px;
  font-size: 22.5px;
  border-left: 5px solid #eeeeee;
}
.bootstrap-iso blockquote p:last-child,
.bootstrap-iso blockquote ul:last-child,
.bootstrap-iso blockquote ol:last-child {
  margin-bottom: 0;
}
.bootstrap-iso blockquote footer,
.bootstrap-iso blockquote small,
.bootstrap-iso blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
.bootstrap-iso blockquote footer:before,
.bootstrap-iso blockquote small:before,
.bootstrap-iso blockquote .small:before {
  content: '\2014 \00A0';
}
.bootstrap-iso .blockquote-reverse,
.bootstrap-iso blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.bootstrap-iso .blockquote-reverse footer:before,
.bootstrap-iso blockquote.pull-right footer:before,
.bootstrap-iso .blockquote-reverse small:before,
.bootstrap-iso blockquote.pull-right small:before,
.bootstrap-iso .blockquote-reverse .small:before,
.bootstrap-iso blockquote.pull-right .small:before {
  content: '';
}
.bootstrap-iso .blockquote-reverse footer:after,
.bootstrap-iso blockquote.pull-right footer:after,
.bootstrap-iso .blockquote-reverse small:after,
.bootstrap-iso blockquote.pull-right small:after,
.bootstrap-iso .blockquote-reverse .small:after,
.bootstrap-iso blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
.bootstrap-iso address {
  margin-bottom: 25px;
  font-style: normal;
  line-height: 1.42857143;
}
.bootstrap-iso code,
.bootstrap-iso kbd,
.bootstrap-iso pre,
.bootstrap-iso samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
.bootstrap-iso code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
.bootstrap-iso kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #ffffff;
  background-color: #333333;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.bootstrap-iso kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
.bootstrap-iso pre {
  display: block;
  padding: 12px;
  margin: 0 0 12.5px;
  font-size: 17px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
.bootstrap-iso pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.bootstrap-iso .pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.bootstrap-iso .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .bootstrap-iso .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .bootstrap-iso .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .container {
    width: 1170px;
  }
}
.bootstrap-iso .container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.bootstrap-iso .row {
  margin-left: -15px;
  margin-right: -15px;
}
.bootstrap-iso .col-xs-1,
.bootstrap-iso .col-sm-1,
.bootstrap-iso .col-md-1,
.bootstrap-iso .col-lg-1,
.bootstrap-iso .col-xs-2,
.bootstrap-iso .col-sm-2,
.bootstrap-iso .col-md-2,
.bootstrap-iso .col-lg-2,
.bootstrap-iso .col-xs-3,
.bootstrap-iso .col-sm-3,
.bootstrap-iso .col-md-3,
.bootstrap-iso .col-lg-3,
.bootstrap-iso .col-xs-4,
.bootstrap-iso .col-sm-4,
.bootstrap-iso .col-md-4,
.bootstrap-iso .col-lg-4,
.bootstrap-iso .col-xs-5,
.bootstrap-iso .col-sm-5,
.bootstrap-iso .col-md-5,
.bootstrap-iso .col-lg-5,
.bootstrap-iso .col-xs-6,
.bootstrap-iso .col-sm-6,
.bootstrap-iso .col-md-6,
.bootstrap-iso .col-lg-6,
.bootstrap-iso .col-xs-7,
.bootstrap-iso .col-sm-7,
.bootstrap-iso .col-md-7,
.bootstrap-iso .col-lg-7,
.bootstrap-iso .col-xs-8,
.bootstrap-iso .col-sm-8,
.bootstrap-iso .col-md-8,
.bootstrap-iso .col-lg-8,
.bootstrap-iso .col-xs-9,
.bootstrap-iso .col-sm-9,
.bootstrap-iso .col-md-9,
.bootstrap-iso .col-lg-9,
.bootstrap-iso .col-xs-10,
.bootstrap-iso .col-sm-10,
.bootstrap-iso .col-md-10,
.bootstrap-iso .col-lg-10,
.bootstrap-iso .col-xs-11,
.bootstrap-iso .col-sm-11,
.bootstrap-iso .col-md-11,
.bootstrap-iso .col-lg-11,
.bootstrap-iso .col-xs-12,
.bootstrap-iso .col-sm-12,
.bootstrap-iso .col-md-12,
.bootstrap-iso .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bootstrap-iso .col-xs-1,
.bootstrap-iso .col-xs-2,
.bootstrap-iso .col-xs-3,
.bootstrap-iso .col-xs-4,
.bootstrap-iso .col-xs-5,
.bootstrap-iso .col-xs-6,
.bootstrap-iso .col-xs-7,
.bootstrap-iso .col-xs-8,
.bootstrap-iso .col-xs-9,
.bootstrap-iso .col-xs-10,
.bootstrap-iso .col-xs-11,
.bootstrap-iso .col-xs-12 {
  float: left;
}
.bootstrap-iso .col-xs-12 {
  width: 100%;
}
.bootstrap-iso .col-xs-11 {
  width: 91.66666667%;
}
.bootstrap-iso .col-xs-10 {
  width: 83.33333333%;
}
.bootstrap-iso .col-xs-9 {
  width: 75%;
}
.bootstrap-iso .col-xs-8 {
  width: 66.66666667%;
}
.bootstrap-iso .col-xs-7 {
  width: 58.33333333%;
}
.bootstrap-iso .col-xs-6 {
  width: 50%;
}
.bootstrap-iso .col-xs-5 {
  width: 41.66666667%;
}
.bootstrap-iso .col-xs-4 {
  width: 33.33333333%;
}
.bootstrap-iso .col-xs-3 {
  width: 25%;
}
.bootstrap-iso .col-xs-2 {
  width: 16.66666667%;
}
.bootstrap-iso .col-xs-1 {
  width: 8.33333333%;
}
.bootstrap-iso .col-xs-pull-12 {
  right: 100%;
}
.bootstrap-iso .col-xs-pull-11 {
  right: 91.66666667%;
}
.bootstrap-iso .col-xs-pull-10 {
  right: 83.33333333%;
}
.bootstrap-iso .col-xs-pull-9 {
  right: 75%;
}
.bootstrap-iso .col-xs-pull-8 {
  right: 66.66666667%;
}
.bootstrap-iso .col-xs-pull-7 {
  right: 58.33333333%;
}
.bootstrap-iso .col-xs-pull-6 {
  right: 50%;
}
.bootstrap-iso .col-xs-pull-5 {
  right: 41.66666667%;
}
.bootstrap-iso .col-xs-pull-4 {
  right: 33.33333333%;
}
.bootstrap-iso .col-xs-pull-3 {
  right: 25%;
}
.bootstrap-iso .col-xs-pull-2 {
  right: 16.66666667%;
}
.bootstrap-iso .col-xs-pull-1 {
  right: 8.33333333%;
}
.bootstrap-iso .col-xs-pull-0 {
  right: auto;
}
.bootstrap-iso .col-xs-push-12 {
  left: 100%;
}
.bootstrap-iso .col-xs-push-11 {
  left: 91.66666667%;
}
.bootstrap-iso .col-xs-push-10 {
  left: 83.33333333%;
}
.bootstrap-iso .col-xs-push-9 {
  left: 75%;
}
.bootstrap-iso .col-xs-push-8 {
  left: 66.66666667%;
}
.bootstrap-iso .col-xs-push-7 {
  left: 58.33333333%;
}
.bootstrap-iso .col-xs-push-6 {
  left: 50%;
}
.bootstrap-iso .col-xs-push-5 {
  left: 41.66666667%;
}
.bootstrap-iso .col-xs-push-4 {
  left: 33.33333333%;
}
.bootstrap-iso .col-xs-push-3 {
  left: 25%;
}
.bootstrap-iso .col-xs-push-2 {
  left: 16.66666667%;
}
.bootstrap-iso .col-xs-push-1 {
  left: 8.33333333%;
}
.bootstrap-iso .col-xs-push-0 {
  left: auto;
}
.bootstrap-iso .col-xs-offset-12 {
  margin-left: 100%;
}
.bootstrap-iso .col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.bootstrap-iso .col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.bootstrap-iso .col-xs-offset-9 {
  margin-left: 75%;
}
.bootstrap-iso .col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.bootstrap-iso .col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.bootstrap-iso .col-xs-offset-6 {
  margin-left: 50%;
}
.bootstrap-iso .col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.bootstrap-iso .col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.bootstrap-iso .col-xs-offset-3 {
  margin-left: 25%;
}
.bootstrap-iso .col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.bootstrap-iso .col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.bootstrap-iso .col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .bootstrap-iso .col-sm-1,
  .bootstrap-iso .col-sm-2,
  .bootstrap-iso .col-sm-3,
  .bootstrap-iso .col-sm-4,
  .bootstrap-iso .col-sm-5,
  .bootstrap-iso .col-sm-6,
  .bootstrap-iso .col-sm-7,
  .bootstrap-iso .col-sm-8,
  .bootstrap-iso .col-sm-9,
  .bootstrap-iso .col-sm-10,
  .bootstrap-iso .col-sm-11,
  .bootstrap-iso .col-sm-12 {
    float: left;
  }
  .bootstrap-iso .col-sm-12 {
    width: 100%;
  }
  .bootstrap-iso .col-sm-11 {
    width: 91.66666667%;
  }
  .bootstrap-iso .col-sm-10 {
    width: 83.33333333%;
  }
  .bootstrap-iso .col-sm-9 {
    width: 75%;
  }
  .bootstrap-iso .col-sm-8 {
    width: 66.66666667%;
  }
  .bootstrap-iso .col-sm-7 {
    width: 58.33333333%;
  }
  .bootstrap-iso .col-sm-6 {
    width: 50%;
  }
  .bootstrap-iso .col-sm-5 {
    width: 41.66666667%;
  }
  .bootstrap-iso .col-sm-4 {
    width: 33.33333333%;
  }
  .bootstrap-iso .col-sm-3 {
    width: 25%;
  }
  .bootstrap-iso .col-sm-2 {
    width: 16.66666667%;
  }
  .bootstrap-iso .col-sm-1 {
    width: 8.33333333%;
  }
  .bootstrap-iso .col-sm-pull-12 {
    right: 100%;
  }
  .bootstrap-iso .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .bootstrap-iso .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .bootstrap-iso .col-sm-pull-9 {
    right: 75%;
  }
  .bootstrap-iso .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .bootstrap-iso .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .bootstrap-iso .col-sm-pull-6 {
    right: 50%;
  }
  .bootstrap-iso .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .bootstrap-iso .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .bootstrap-iso .col-sm-pull-3 {
    right: 25%;
  }
  .bootstrap-iso .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .bootstrap-iso .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .bootstrap-iso .col-sm-pull-0 {
    right: auto;
  }
  .bootstrap-iso .col-sm-push-12 {
    left: 100%;
  }
  .bootstrap-iso .col-sm-push-11 {
    left: 91.66666667%;
  }
  .bootstrap-iso .col-sm-push-10 {
    left: 83.33333333%;
  }
  .bootstrap-iso .col-sm-push-9 {
    left: 75%;
  }
  .bootstrap-iso .col-sm-push-8 {
    left: 66.66666667%;
  }
  .bootstrap-iso .col-sm-push-7 {
    left: 58.33333333%;
  }
  .bootstrap-iso .col-sm-push-6 {
    left: 50%;
  }
  .bootstrap-iso .col-sm-push-5 {
    left: 41.66666667%;
  }
  .bootstrap-iso .col-sm-push-4 {
    left: 33.33333333%;
  }
  .bootstrap-iso .col-sm-push-3 {
    left: 25%;
  }
  .bootstrap-iso .col-sm-push-2 {
    left: 16.66666667%;
  }
  .bootstrap-iso .col-sm-push-1 {
    left: 8.33333333%;
  }
  .bootstrap-iso .col-sm-push-0 {
    left: auto;
  }
  .bootstrap-iso .col-sm-offset-12 {
    margin-left: 100%;
  }
  .bootstrap-iso .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .bootstrap-iso .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .bootstrap-iso .col-sm-offset-9 {
    margin-left: 75%;
  }
  .bootstrap-iso .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .bootstrap-iso .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .bootstrap-iso .col-sm-offset-6 {
    margin-left: 50%;
  }
  .bootstrap-iso .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .bootstrap-iso .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .bootstrap-iso .col-sm-offset-3 {
    margin-left: 25%;
  }
  .bootstrap-iso .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .bootstrap-iso .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .bootstrap-iso .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .bootstrap-iso .col-md-1,
  .bootstrap-iso .col-md-2,
  .bootstrap-iso .col-md-3,
  .bootstrap-iso .col-md-4,
  .bootstrap-iso .col-md-5,
  .bootstrap-iso .col-md-6,
  .bootstrap-iso .col-md-7,
  .bootstrap-iso .col-md-8,
  .bootstrap-iso .col-md-9,
  .bootstrap-iso .col-md-10,
  .bootstrap-iso .col-md-11,
  .bootstrap-iso .col-md-12 {
    float: left;
  }
  .bootstrap-iso .col-md-12 {
    width: 100%;
  }
  .bootstrap-iso .col-md-11 {
    width: 91.66666667%;
  }
  .bootstrap-iso .col-md-10 {
    width: 83.33333333%;
  }
  .bootstrap-iso .col-md-9 {
    width: 75%;
  }
  .bootstrap-iso .col-md-8 {
    width: 66.66666667%;
  }
  .bootstrap-iso .col-md-7 {
    width: 58.33333333%;
  }
  .bootstrap-iso .col-md-6 {
    width: 50%;
  }
  .bootstrap-iso .col-md-5 {
    width: 41.66666667%;
  }
  .bootstrap-iso .col-md-4 {
    width: 33.33333333%;
  }
  .bootstrap-iso .col-md-3 {
    width: 25%;
  }
  .bootstrap-iso .col-md-2 {
    width: 16.66666667%;
  }
  .bootstrap-iso .col-md-1 {
    width: 8.33333333%;
  }
  .bootstrap-iso .col-md-pull-12 {
    right: 100%;
  }
  .bootstrap-iso .col-md-pull-11 {
    right: 91.66666667%;
  }
  .bootstrap-iso .col-md-pull-10 {
    right: 83.33333333%;
  }
  .bootstrap-iso .col-md-pull-9 {
    right: 75%;
  }
  .bootstrap-iso .col-md-pull-8 {
    right: 66.66666667%;
  }
  .bootstrap-iso .col-md-pull-7 {
    right: 58.33333333%;
  }
  .bootstrap-iso .col-md-pull-6 {
    right: 50%;
  }
  .bootstrap-iso .col-md-pull-5 {
    right: 41.66666667%;
  }
  .bootstrap-iso .col-md-pull-4 {
    right: 33.33333333%;
  }
  .bootstrap-iso .col-md-pull-3 {
    right: 25%;
  }
  .bootstrap-iso .col-md-pull-2 {
    right: 16.66666667%;
  }
  .bootstrap-iso .col-md-pull-1 {
    right: 8.33333333%;
  }
  .bootstrap-iso .col-md-pull-0 {
    right: auto;
  }
  .bootstrap-iso .col-md-push-12 {
    left: 100%;
  }
  .bootstrap-iso .col-md-push-11 {
    left: 91.66666667%;
  }
  .bootstrap-iso .col-md-push-10 {
    left: 83.33333333%;
  }
  .bootstrap-iso .col-md-push-9 {
    left: 75%;
  }
  .bootstrap-iso .col-md-push-8 {
    left: 66.66666667%;
  }
  .bootstrap-iso .col-md-push-7 {
    left: 58.33333333%;
  }
  .bootstrap-iso .col-md-push-6 {
    left: 50%;
  }
  .bootstrap-iso .col-md-push-5 {
    left: 41.66666667%;
  }
  .bootstrap-iso .col-md-push-4 {
    left: 33.33333333%;
  }
  .bootstrap-iso .col-md-push-3 {
    left: 25%;
  }
  .bootstrap-iso .col-md-push-2 {
    left: 16.66666667%;
  }
  .bootstrap-iso .col-md-push-1 {
    left: 8.33333333%;
  }
  .bootstrap-iso .col-md-push-0 {
    left: auto;
  }
  .bootstrap-iso .col-md-offset-12 {
    margin-left: 100%;
  }
  .bootstrap-iso .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .bootstrap-iso .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .bootstrap-iso .col-md-offset-9 {
    margin-left: 75%;
  }
  .bootstrap-iso .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .bootstrap-iso .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .bootstrap-iso .col-md-offset-6 {
    margin-left: 50%;
  }
  .bootstrap-iso .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .bootstrap-iso .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .bootstrap-iso .col-md-offset-3 {
    margin-left: 25%;
  }
  .bootstrap-iso .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .bootstrap-iso .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .bootstrap-iso .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .col-lg-1,
  .bootstrap-iso .col-lg-2,
  .bootstrap-iso .col-lg-3,
  .bootstrap-iso .col-lg-4,
  .bootstrap-iso .col-lg-5,
  .bootstrap-iso .col-lg-6,
  .bootstrap-iso .col-lg-7,
  .bootstrap-iso .col-lg-8,
  .bootstrap-iso .col-lg-9,
  .bootstrap-iso .col-lg-10,
  .bootstrap-iso .col-lg-11,
  .bootstrap-iso .col-lg-12 {
    float: left;
  }
  .bootstrap-iso .col-lg-12 {
    width: 100%;
  }
  .bootstrap-iso .col-lg-11 {
    width: 91.66666667%;
  }
  .bootstrap-iso .col-lg-10 {
    width: 83.33333333%;
  }
  .bootstrap-iso .col-lg-9 {
    width: 75%;
  }
  .bootstrap-iso .col-lg-8 {
    width: 66.66666667%;
  }
  .bootstrap-iso .col-lg-7 {
    width: 58.33333333%;
  }
  .bootstrap-iso .col-lg-6 {
    width: 50%;
  }
  .bootstrap-iso .col-lg-5 {
    width: 41.66666667%;
  }
  .bootstrap-iso .col-lg-4 {
    width: 33.33333333%;
  }
  .bootstrap-iso .col-lg-3 {
    width: 25%;
  }
  .bootstrap-iso .col-lg-2 {
    width: 16.66666667%;
  }
  .bootstrap-iso .col-lg-1 {
    width: 8.33333333%;
  }
  .bootstrap-iso .col-lg-pull-12 {
    right: 100%;
  }
  .bootstrap-iso .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .bootstrap-iso .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .bootstrap-iso .col-lg-pull-9 {
    right: 75%;
  }
  .bootstrap-iso .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .bootstrap-iso .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .bootstrap-iso .col-lg-pull-6 {
    right: 50%;
  }
  .bootstrap-iso .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .bootstrap-iso .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .bootstrap-iso .col-lg-pull-3 {
    right: 25%;
  }
  .bootstrap-iso .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .bootstrap-iso .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .bootstrap-iso .col-lg-pull-0 {
    right: auto;
  }
  .bootstrap-iso .col-lg-push-12 {
    left: 100%;
  }
  .bootstrap-iso .col-lg-push-11 {
    left: 91.66666667%;
  }
  .bootstrap-iso .col-lg-push-10 {
    left: 83.33333333%;
  }
  .bootstrap-iso .col-lg-push-9 {
    left: 75%;
  }
  .bootstrap-iso .col-lg-push-8 {
    left: 66.66666667%;
  }
  .bootstrap-iso .col-lg-push-7 {
    left: 58.33333333%;
  }
  .bootstrap-iso .col-lg-push-6 {
    left: 50%;
  }
  .bootstrap-iso .col-lg-push-5 {
    left: 41.66666667%;
  }
  .bootstrap-iso .col-lg-push-4 {
    left: 33.33333333%;
  }
  .bootstrap-iso .col-lg-push-3 {
    left: 25%;
  }
  .bootstrap-iso .col-lg-push-2 {
    left: 16.66666667%;
  }
  .bootstrap-iso .col-lg-push-1 {
    left: 8.33333333%;
  }
  .bootstrap-iso .col-lg-push-0 {
    left: auto;
  }
  .bootstrap-iso .col-lg-offset-12 {
    margin-left: 100%;
  }
  .bootstrap-iso .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .bootstrap-iso .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .bootstrap-iso .col-lg-offset-9 {
    margin-left: 75%;
  }
  .bootstrap-iso .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .bootstrap-iso .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .bootstrap-iso .col-lg-offset-6 {
    margin-left: 50%;
  }
  .bootstrap-iso .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .bootstrap-iso .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .bootstrap-iso .col-lg-offset-3 {
    margin-left: 25%;
  }
  .bootstrap-iso .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .bootstrap-iso .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .bootstrap-iso .col-lg-offset-0 {
    margin-left: 0%;
  }
}
.bootstrap-iso table {
  background-color: transparent;
}
.bootstrap-iso caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
.bootstrap-iso th {
  text-align: left;
}
.bootstrap-iso .table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 25px;
}
.bootstrap-iso .table > thead > tr > th,
.bootstrap-iso .table > tbody > tr > th,
.bootstrap-iso .table > tfoot > tr > th,
.bootstrap-iso .table > thead > tr > td,
.bootstrap-iso .table > tbody > tr > td,
.bootstrap-iso .table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}
.bootstrap-iso .table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #dddddd;
}
.bootstrap-iso .table > caption + thead > tr:first-child > th,
.bootstrap-iso .table > colgroup + thead > tr:first-child > th,
.bootstrap-iso .table > thead:first-child > tr:first-child > th,
.bootstrap-iso .table > caption + thead > tr:first-child > td,
.bootstrap-iso .table > colgroup + thead > tr:first-child > td,
.bootstrap-iso .table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.bootstrap-iso .table > tbody + tbody {
  border-top: 2px solid #dddddd;
}
.bootstrap-iso .table .table {
  background-color: #ffffff;
}
.bootstrap-iso .table-condensed > thead > tr > th,
.bootstrap-iso .table-condensed > tbody > tr > th,
.bootstrap-iso .table-condensed > tfoot > tr > th,
.bootstrap-iso .table-condensed > thead > tr > td,
.bootstrap-iso .table-condensed > tbody > tr > td,
.bootstrap-iso .table-condensed > tfoot > tr > td {
  padding: 5px;
}
.bootstrap-iso .table-bordered {
  border: 1px solid #dddddd;
}
.bootstrap-iso .table-bordered > thead > tr > th,
.bootstrap-iso .table-bordered > tbody > tr > th,
.bootstrap-iso .table-bordered > tfoot > tr > th,
.bootstrap-iso .table-bordered > thead > tr > td,
.bootstrap-iso .table-bordered > tbody > tr > td,
.bootstrap-iso .table-bordered > tfoot > tr > td {
  border: 1px solid #dddddd;
}
.bootstrap-iso .table-bordered > thead > tr > th,
.bootstrap-iso .table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.bootstrap-iso .table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.bootstrap-iso .table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
.bootstrap-iso table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
.bootstrap-iso table td[class*="col-"],
.bootstrap-iso table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.bootstrap-iso .table > thead > tr > td.active,
.bootstrap-iso .table > tbody > tr > td.active,
.bootstrap-iso .table > tfoot > tr > td.active,
.bootstrap-iso .table > thead > tr > th.active,
.bootstrap-iso .table > tbody > tr > th.active,
.bootstrap-iso .table > tfoot > tr > th.active,
.bootstrap-iso .table > thead > tr.active > td,
.bootstrap-iso .table > tbody > tr.active > td,
.bootstrap-iso .table > tfoot > tr.active > td,
.bootstrap-iso .table > thead > tr.active > th,
.bootstrap-iso .table > tbody > tr.active > th,
.bootstrap-iso .table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.bootstrap-iso .table-hover > tbody > tr > td.active:hover,
.bootstrap-iso .table-hover > tbody > tr > th.active:hover,
.bootstrap-iso .table-hover > tbody > tr.active:hover > td,
.bootstrap-iso .table-hover > tbody > tr:hover > .active,
.bootstrap-iso .table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.bootstrap-iso .table > thead > tr > td.success,
.bootstrap-iso .table > tbody > tr > td.success,
.bootstrap-iso .table > tfoot > tr > td.success,
.bootstrap-iso .table > thead > tr > th.success,
.bootstrap-iso .table > tbody > tr > th.success,
.bootstrap-iso .table > tfoot > tr > th.success,
.bootstrap-iso .table > thead > tr.success > td,
.bootstrap-iso .table > tbody > tr.success > td,
.bootstrap-iso .table > tfoot > tr.success > td,
.bootstrap-iso .table > thead > tr.success > th,
.bootstrap-iso .table > tbody > tr.success > th,
.bootstrap-iso .table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.bootstrap-iso .table-hover > tbody > tr > td.success:hover,
.bootstrap-iso .table-hover > tbody > tr > th.success:hover,
.bootstrap-iso .table-hover > tbody > tr.success:hover > td,
.bootstrap-iso .table-hover > tbody > tr:hover > .success,
.bootstrap-iso .table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.bootstrap-iso .table > thead > tr > td.info,
.bootstrap-iso .table > tbody > tr > td.info,
.bootstrap-iso .table > tfoot > tr > td.info,
.bootstrap-iso .table > thead > tr > th.info,
.bootstrap-iso .table > tbody > tr > th.info,
.bootstrap-iso .table > tfoot > tr > th.info,
.bootstrap-iso .table > thead > tr.info > td,
.bootstrap-iso .table > tbody > tr.info > td,
.bootstrap-iso .table > tfoot > tr.info > td,
.bootstrap-iso .table > thead > tr.info > th,
.bootstrap-iso .table > tbody > tr.info > th,
.bootstrap-iso .table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.bootstrap-iso .table-hover > tbody > tr > td.info:hover,
.bootstrap-iso .table-hover > tbody > tr > th.info:hover,
.bootstrap-iso .table-hover > tbody > tr.info:hover > td,
.bootstrap-iso .table-hover > tbody > tr:hover > .info,
.bootstrap-iso .table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.bootstrap-iso .table > thead > tr > td.warning,
.bootstrap-iso .table > tbody > tr > td.warning,
.bootstrap-iso .table > tfoot > tr > td.warning,
.bootstrap-iso .table > thead > tr > th.warning,
.bootstrap-iso .table > tbody > tr > th.warning,
.bootstrap-iso .table > tfoot > tr > th.warning,
.bootstrap-iso .table > thead > tr.warning > td,
.bootstrap-iso .table > tbody > tr.warning > td,
.bootstrap-iso .table > tfoot > tr.warning > td,
.bootstrap-iso .table > thead > tr.warning > th,
.bootstrap-iso .table > tbody > tr.warning > th,
.bootstrap-iso .table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.bootstrap-iso .table-hover > tbody > tr > td.warning:hover,
.bootstrap-iso .table-hover > tbody > tr > th.warning:hover,
.bootstrap-iso .table-hover > tbody > tr.warning:hover > td,
.bootstrap-iso .table-hover > tbody > tr:hover > .warning,
.bootstrap-iso .table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.bootstrap-iso .table > thead > tr > td.danger,
.bootstrap-iso .table > tbody > tr > td.danger,
.bootstrap-iso .table > tfoot > tr > td.danger,
.bootstrap-iso .table > thead > tr > th.danger,
.bootstrap-iso .table > tbody > tr > th.danger,
.bootstrap-iso .table > tfoot > tr > th.danger,
.bootstrap-iso .table > thead > tr.danger > td,
.bootstrap-iso .table > tbody > tr.danger > td,
.bootstrap-iso .table > tfoot > tr.danger > td,
.bootstrap-iso .table > thead > tr.danger > th,
.bootstrap-iso .table > tbody > tr.danger > th,
.bootstrap-iso .table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.bootstrap-iso .table-hover > tbody > tr > td.danger:hover,
.bootstrap-iso .table-hover > tbody > tr > th.danger:hover,
.bootstrap-iso .table-hover > tbody > tr.danger:hover > td,
.bootstrap-iso .table-hover > tbody > tr:hover > .danger,
.bootstrap-iso .table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.bootstrap-iso .table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .bootstrap-iso .table-responsive {
    width: 100%;
    margin-bottom: 18.75px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #dddddd;
  }
  .bootstrap-iso .table-responsive > .table {
    margin-bottom: 0;
  }
  .bootstrap-iso .table-responsive > .table > thead > tr > th,
  .bootstrap-iso .table-responsive > .table > tbody > tr > th,
  .bootstrap-iso .table-responsive > .table > tfoot > tr > th,
  .bootstrap-iso .table-responsive > .table > thead > tr > td,
  .bootstrap-iso .table-responsive > .table > tbody > tr > td,
  .bootstrap-iso .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .bootstrap-iso .table-responsive > .table-bordered {
    border: 0;
  }
  .bootstrap-iso .table-responsive > .table-bordered > thead > tr > th:first-child,
  .bootstrap-iso .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .bootstrap-iso .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .bootstrap-iso .table-responsive > .table-bordered > thead > tr > td:first-child,
  .bootstrap-iso .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .bootstrap-iso .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .bootstrap-iso .table-responsive > .table-bordered > thead > tr > th:last-child,
  .bootstrap-iso .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .bootstrap-iso .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .bootstrap-iso .table-responsive > .table-bordered > thead > tr > td:last-child,
  .bootstrap-iso .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .bootstrap-iso .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .bootstrap-iso .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .bootstrap-iso .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .bootstrap-iso .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .bootstrap-iso .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
.bootstrap-iso fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
.bootstrap-iso legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 25px;
  font-size: 27px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
.bootstrap-iso label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
.bootstrap-iso input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-iso input[type="radio"],
.bootstrap-iso input[type="checkbox"] {
  margin: 6px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
.bootstrap-iso input[type="file"] {
  display: block;
}
.bootstrap-iso input[type="range"] {
  display: block;
  width: 100%;
}
.bootstrap-iso select[multiple],
.bootstrap-iso select[size] {
  height: auto;
}
.bootstrap-iso input[type="file"]:focus,
.bootstrap-iso input[type="radio"]:focus,
.bootstrap-iso input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bootstrap-iso output {
  display: block;
  padding-top: 7px;
  font-size: 18px;
  line-height: 1.42857143;
  color: #555555;
}
.bootstrap-iso .form-control {
  display: block;
  width: 100%;
  height: 39px;
  padding: 6px 12px;
  font-size: 18px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bootstrap-iso .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.bootstrap-iso .form-control::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
.bootstrap-iso .form-control:-ms-input-placeholder {
  color: #999999;
}
.bootstrap-iso .form-control::-webkit-input-placeholder {
  color: #999999;
}
.bootstrap-iso .form-control[disabled],
.bootstrap-iso .form-control[readonly],
.bootstrap-iso fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eeeeee;
  opacity: 1;
}
.bootstrap-iso textarea.form-control {
  height: auto !important; /*formden tweak*/
}
.bootstrap-iso input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  .bootstrap-iso input[type="date"],
  .bootstrap-iso input[type="time"],
  .bootstrap-iso input[type="datetime-local"],
  .bootstrap-iso input[type="month"] {
    line-height: 39px;
  }
  .bootstrap-iso input[type="date"].input-sm,
  .bootstrap-iso input[type="time"].input-sm,
  .bootstrap-iso input[type="datetime-local"].input-sm,
  .bootstrap-iso input[type="month"].input-sm,
  .bootstrap-iso .input-group-sm input[type="date"],
  .bootstrap-iso .input-group-sm input[type="time"],
  .bootstrap-iso .input-group-sm input[type="datetime-local"],
  .bootstrap-iso .input-group-sm input[type="month"] {
    line-height: 36px;
  }
  .bootstrap-iso input[type="date"].input-lg,
  .bootstrap-iso input[type="time"].input-lg,
  .bootstrap-iso input[type="datetime-local"].input-lg,
  .bootstrap-iso input[type="month"].input-lg,
  .bootstrap-iso .input-group-lg input[type="date"],
  .bootstrap-iso .input-group-lg input[type="time"],
  .bootstrap-iso .input-group-lg input[type="datetime-local"],
  .bootstrap-iso .input-group-lg input[type="month"] {
    line-height: 53px;
  }
}
.bootstrap-iso .form-group {
  margin-bottom: 15px;
}
.bootstrap-iso .radio,
.bootstrap-iso .checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.bootstrap-iso .radio label,
.bootstrap-iso .checkbox label {
  min-height: 25px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.bootstrap-iso .radio input[type="radio"],
.bootstrap-iso .radio-inline input[type="radio"],
.bootstrap-iso .checkbox input[type="checkbox"],
.bootstrap-iso .checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 6px \9; /* formden change */
}
.bootstrap-iso .radio + .radio,
.bootstrap-iso .checkbox + .checkbox {
  margin-top: -5px;
}
.bootstrap-iso .radio-inline,
.bootstrap-iso .checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.bootstrap-iso .radio-inline + .radio-inline,
.bootstrap-iso .checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
.bootstrap-iso input[type="radio"][disabled],
.bootstrap-iso input[type="checkbox"][disabled],
.bootstrap-iso input[type="radio"].disabled,
.bootstrap-iso input[type="checkbox"].disabled,
.bootstrap-iso fieldset[disabled] input[type="radio"],
.bootstrap-iso fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.bootstrap-iso .radio-inline.disabled,
.bootstrap-iso .checkbox-inline.disabled,
.bootstrap-iso fieldset[disabled] .radio-inline,
.bootstrap-iso fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.bootstrap-iso .radio.disabled label,
.bootstrap-iso .checkbox.disabled label,
.bootstrap-iso fieldset[disabled] .radio label,
.bootstrap-iso fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.bootstrap-iso .form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.bootstrap-iso .form-control-static.input-lg,
.bootstrap-iso .form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.bootstrap-iso .input-sm {
  height: 36px;
  padding: 5px 10px;
  font-size: 16px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-iso select.input-sm {
  height: 36px;
  line-height: 36px;
}
.bootstrap-iso textarea.input-sm,
.bootstrap-iso select[multiple].input-sm {
  height: auto;
}
.bootstrap-iso .form-group-sm .form-control {
  height: 36px;
  padding: 5px 10px;
  font-size: 16px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-iso select.form-group-sm .form-control {
  height: 36px;
  line-height: 36px;
}
.bootstrap-iso textarea.form-group-sm .form-control,
.bootstrap-iso select[multiple].form-group-sm .form-control {
  height: auto;
}
.bootstrap-iso .form-group-sm .form-control-static {
  height: 36px;
  padding: 5px 10px;
  font-size: 16px;
  line-height: 1.5;
}
.bootstrap-iso .input-lg {
  height: 53px;
  padding: 10px 16px;
  font-size: 23px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-iso select.input-lg {
  height: 53px;
  line-height: 53px;
}
.bootstrap-iso textarea.input-lg,
.bootstrap-iso select[multiple].input-lg {
  height: auto;
}
.bootstrap-iso .form-group-lg .form-control {
  height: 53px;
  padding: 10px 16px;
  font-size: 23px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-iso select.form-group-lg .form-control {
  height: 53px;
  line-height: 53px;
}
.bootstrap-iso textarea.form-group-lg .form-control,
.bootstrap-iso select[multiple].form-group-lg .form-control {
  height: auto;
}
.bootstrap-iso .form-group-lg .form-control-static {
  height: 53px;
  padding: 10px 16px;
  font-size: 23px;
  line-height: 1.3333333;
}
.bootstrap-iso .has-feedback {
  position: relative;
}
.bootstrap-iso .has-feedback .form-control {
  padding-right: 48.75px;
}
.bootstrap-iso .form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 39px;
  height: 39px;
  line-height: 39px;
  text-align: center;
  pointer-events: none;
}
.bootstrap-iso .input-lg + .form-control-feedback {
  width: 53px;
  height: 53px;
  line-height: 53px;
}
.bootstrap-iso .input-sm + .form-control-feedback {
  width: 36px;
  height: 36px;
  line-height: 36px;
}
.bootstrap-iso .has-success .help-block,
.bootstrap-iso .has-success .control-label,
.bootstrap-iso .has-success .radio,
.bootstrap-iso .has-success .checkbox,
.bootstrap-iso .has-success .radio-inline,
.bootstrap-iso .has-success .checkbox-inline,
.bootstrap-iso .has-success.radio label,
.bootstrap-iso .has-success.checkbox label,
.bootstrap-iso .has-success.radio-inline label,
.bootstrap-iso .has-success.checkbox-inline label {
  color: #3c763d;
}
.bootstrap-iso .has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-iso .has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.bootstrap-iso .has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.bootstrap-iso .has-success .form-control-feedback {
  color: #3c763d;
}
.bootstrap-iso .has-warning .help-block,
.bootstrap-iso .has-warning .control-label,
.bootstrap-iso .has-warning .radio,
.bootstrap-iso .has-warning .checkbox,
.bootstrap-iso .has-warning .radio-inline,
.bootstrap-iso .has-warning .checkbox-inline,
.bootstrap-iso .has-warning.radio label,
.bootstrap-iso .has-warning.checkbox label,
.bootstrap-iso .has-warning.radio-inline label,
.bootstrap-iso .has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.bootstrap-iso .has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-iso .has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.bootstrap-iso .has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.bootstrap-iso .has-warning .form-control-feedback {
  color: #8a6d3b;
}
.bootstrap-iso .has-error .help-block,
.bootstrap-iso .has-error .control-label,
.bootstrap-iso .has-error .radio,
.bootstrap-iso .has-error .checkbox,
.bootstrap-iso .has-error .radio-inline,
.bootstrap-iso .has-error .checkbox-inline,
.bootstrap-iso .has-error.radio label,
.bootstrap-iso .has-error.checkbox label,
.bootstrap-iso .has-error.radio-inline label,
.bootstrap-iso .has-error.checkbox-inline label {
  color: #a94442;
}
.bootstrap-iso .has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-iso .has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.bootstrap-iso .has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.bootstrap-iso .has-error .form-control-feedback {
  color: #a94442;
}
.bootstrap-iso .has-feedback label ~ .form-control-feedback {
  top: 30px;
}
.bootstrap-iso .has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.bootstrap-iso .help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .bootstrap-iso .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-iso .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .bootstrap-iso .form-inline .form-control-static {
    display: inline-block;
  }
  .bootstrap-iso .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .bootstrap-iso .form-inline .input-group .input-group-addon,
  .bootstrap-iso .form-inline .input-group .input-group-btn,
  .bootstrap-iso .form-inline .input-group .form-control {
    width: auto;
  }
  .bootstrap-iso .form-inline .input-group > .form-control {
    width: 100%;
  }
  .bootstrap-iso .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-iso .form-inline .radio,
  .bootstrap-iso .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-iso .form-inline .radio label,
  .bootstrap-iso .form-inline .checkbox label {
    padding-left: 0;
  }
  .bootstrap-iso .form-inline .radio input[type="radio"],
  .bootstrap-iso .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .bootstrap-iso .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.bootstrap-iso .form-horizontal .radio,
.bootstrap-iso .form-horizontal .checkbox,
.bootstrap-iso .form-horizontal .radio-inline,
.bootstrap-iso .form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.bootstrap-iso .form-horizontal .radio,
.bootstrap-iso .form-horizontal .checkbox {
  min-height: 32px;
}
.bootstrap-iso .form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .bootstrap-iso .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.bootstrap-iso .form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .bootstrap-iso .form-horizontal .form-group-lg .control-label {
    padding-top: 14.333333px;
  }
}
@media (min-width: 768px) {
  .bootstrap-iso .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
  }
}
.bootstrap-iso .btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 18px;
  line-height: 1.42857143;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.bootstrap-iso .btn:focus,
.bootstrap-iso .btn:active:focus,
.bootstrap-iso .btn.active:focus,
.bootstrap-iso .btn.focus,
.bootstrap-iso .btn:active.focus,
.bootstrap-iso .btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bootstrap-iso .btn:hover,
.bootstrap-iso .btn:focus,
.bootstrap-iso .btn.focus {
  color: #333333;
  text-decoration: none;
}
.bootstrap-iso .btn:active,
.bootstrap-iso .btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.bootstrap-iso .btn.disabled,
.bootstrap-iso .btn[disabled],
.bootstrap-iso fieldset[disabled] .btn {
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-iso .btn-default {
  color: #333333;
  background-color: #ffffff;
  border-color: #cccccc;
}
.bootstrap-iso .btn-default:hover,
.bootstrap-iso .btn-default:focus,
.bootstrap-iso .btn-default.focus,
.bootstrap-iso .btn-default:active,
.bootstrap-iso .btn-default.active,
.bootstrap-iso .open > .dropdown-toggle.btn-default {
  color: #333333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.bootstrap-iso .btn-default:active,
.bootstrap-iso .btn-default.active,
.bootstrap-iso .open > .dropdown-toggle.btn-default {
  background-image: none;
}
.bootstrap-iso .btn-default.disabled,
.bootstrap-iso .btn-default[disabled],
.bootstrap-iso fieldset[disabled] .btn-default,
.bootstrap-iso .btn-default.disabled:hover,
.bootstrap-iso .btn-default[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-default:hover,
.bootstrap-iso .btn-default.disabled:focus,
.bootstrap-iso .btn-default[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-default:focus,
.bootstrap-iso .btn-default.disabled.focus,
.bootstrap-iso .btn-default[disabled].focus,
.bootstrap-iso fieldset[disabled] .btn-default.focus,
.bootstrap-iso .btn-default.disabled:active,
.bootstrap-iso .btn-default[disabled]:active,
.bootstrap-iso fieldset[disabled] .btn-default:active,
.bootstrap-iso .btn-default.disabled.active,
.bootstrap-iso .btn-default[disabled].active,
.bootstrap-iso fieldset[disabled] .btn-default.active {
  background-color: #ffffff;
  border-color: #cccccc;
}
.bootstrap-iso .btn-default .badge {
  color: #ffffff;
  background-color: #333333;
}
.bootstrap-iso .btn-primary {
  color: #ffffff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.bootstrap-iso .btn-primary:hover,
.bootstrap-iso .btn-primary:focus,
.bootstrap-iso .btn-primary.focus,
.bootstrap-iso .btn-primary:active,
.bootstrap-iso .btn-primary.active,
.bootstrap-iso .open > .dropdown-toggle.btn-primary {
  color: #ffffff;
  background-color: #286090;
  border-color: #204d74;
}
.bootstrap-iso .btn-primary:active,
.bootstrap-iso .btn-primary.active,
.bootstrap-iso .open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.bootstrap-iso .btn-primary.disabled,
.bootstrap-iso .btn-primary[disabled],
.bootstrap-iso fieldset[disabled] .btn-primary,
.bootstrap-iso .btn-primary.disabled:hover,
.bootstrap-iso .btn-primary[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-primary:hover,
.bootstrap-iso .btn-primary.disabled:focus,
.bootstrap-iso .btn-primary[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-primary:focus,
.bootstrap-iso .btn-primary.disabled.focus,
.bootstrap-iso .btn-primary[disabled].focus,
.bootstrap-iso fieldset[disabled] .btn-primary.focus,
.bootstrap-iso .btn-primary.disabled:active,
.bootstrap-iso .btn-primary[disabled]:active,
.bootstrap-iso fieldset[disabled] .btn-primary:active,
.bootstrap-iso .btn-primary.disabled.active,
.bootstrap-iso .btn-primary[disabled].active,
.bootstrap-iso fieldset[disabled] .btn-primary.active {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.bootstrap-iso .btn-primary .badge {
  color: #337ab7;
  background-color: #ffffff;
}
.bootstrap-iso .btn-success {
  color: #ffffff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.bootstrap-iso .btn-success:hover,
.bootstrap-iso .btn-success:focus,
.bootstrap-iso .btn-success.focus,
.bootstrap-iso .btn-success:active,
.bootstrap-iso .btn-success.active,
.bootstrap-iso .open > .dropdown-toggle.btn-success {
  color: #ffffff;
  background-color: #449d44;
  border-color: #398439;
}
.bootstrap-iso .btn-success:active,
.bootstrap-iso .btn-success.active,
.bootstrap-iso .open > .dropdown-toggle.btn-success {
  background-image: none;
}
.bootstrap-iso .btn-success.disabled,
.bootstrap-iso .btn-success[disabled],
.bootstrap-iso fieldset[disabled] .btn-success,
.bootstrap-iso .btn-success.disabled:hover,
.bootstrap-iso .btn-success[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-success:hover,
.bootstrap-iso .btn-success.disabled:focus,
.bootstrap-iso .btn-success[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-success:focus,
.bootstrap-iso .btn-success.disabled.focus,
.bootstrap-iso .btn-success[disabled].focus,
.bootstrap-iso fieldset[disabled] .btn-success.focus,
.bootstrap-iso .btn-success.disabled:active,
.bootstrap-iso .btn-success[disabled]:active,
.bootstrap-iso fieldset[disabled] .btn-success:active,
.bootstrap-iso .btn-success.disabled.active,
.bootstrap-iso .btn-success[disabled].active,
.bootstrap-iso fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.bootstrap-iso .btn-success .badge {
  color: #5cb85c;
  background-color: #ffffff;
}
.bootstrap-iso .btn-info {
  color: #ffffff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.bootstrap-iso .btn-info:hover,
.bootstrap-iso .btn-info:focus,
.bootstrap-iso .btn-info.focus,
.bootstrap-iso .btn-info:active,
.bootstrap-iso .btn-info.active,
.bootstrap-iso .open > .dropdown-toggle.btn-info {
  color: #ffffff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.bootstrap-iso .btn-info:active,
.bootstrap-iso .btn-info.active,
.bootstrap-iso .open > .dropdown-toggle.btn-info {
  background-image: none;
}
.bootstrap-iso .btn-info.disabled,
.bootstrap-iso .btn-info[disabled],
.bootstrap-iso fieldset[disabled] .btn-info,
.bootstrap-iso .btn-info.disabled:hover,
.bootstrap-iso .btn-info[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-info:hover,
.bootstrap-iso .btn-info.disabled:focus,
.bootstrap-iso .btn-info[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-info:focus,
.bootstrap-iso .btn-info.disabled.focus,
.bootstrap-iso .btn-info[disabled].focus,
.bootstrap-iso fieldset[disabled] .btn-info.focus,
.bootstrap-iso .btn-info.disabled:active,
.bootstrap-iso .btn-info[disabled]:active,
.bootstrap-iso fieldset[disabled] .btn-info:active,
.bootstrap-iso .btn-info.disabled.active,
.bootstrap-iso .btn-info[disabled].active,
.bootstrap-iso fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.bootstrap-iso .btn-info .badge {
  color: #5bc0de;
  background-color: #ffffff;
}
.bootstrap-iso .btn-warning {
  color: #ffffff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.bootstrap-iso .btn-warning:hover,
.bootstrap-iso .btn-warning:focus,
.bootstrap-iso .btn-warning.focus,
.bootstrap-iso .btn-warning:active,
.bootstrap-iso .btn-warning.active,
.bootstrap-iso .open > .dropdown-toggle.btn-warning {
  color: #ffffff;
  background-color: #ec971f;
  border-color: #d58512;
}
.bootstrap-iso .btn-warning:active,
.bootstrap-iso .btn-warning.active,
.bootstrap-iso .open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.bootstrap-iso .btn-warning.disabled,
.bootstrap-iso .btn-warning[disabled],
.bootstrap-iso fieldset[disabled] .btn-warning,
.bootstrap-iso .btn-warning.disabled:hover,
.bootstrap-iso .btn-warning[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-warning:hover,
.bootstrap-iso .btn-warning.disabled:focus,
.bootstrap-iso .btn-warning[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-warning:focus,
.bootstrap-iso .btn-warning.disabled.focus,
.bootstrap-iso .btn-warning[disabled].focus,
.bootstrap-iso fieldset[disabled] .btn-warning.focus,
.bootstrap-iso .btn-warning.disabled:active,
.bootstrap-iso .btn-warning[disabled]:active,
.bootstrap-iso fieldset[disabled] .btn-warning:active,
.bootstrap-iso .btn-warning.disabled.active,
.bootstrap-iso .btn-warning[disabled].active,
.bootstrap-iso fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.bootstrap-iso .btn-warning .badge {
  color: #f0ad4e;
  background-color: #ffffff;
}
.bootstrap-iso .btn-danger {
  color: #ffffff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.bootstrap-iso .btn-danger:hover,
.bootstrap-iso .btn-danger:focus,
.bootstrap-iso .btn-danger.focus,
.bootstrap-iso .btn-danger:active,
.bootstrap-iso .btn-danger.active,
.bootstrap-iso .open > .dropdown-toggle.btn-danger {
  color: #ffffff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.bootstrap-iso .btn-danger:active,
.bootstrap-iso .btn-danger.active,
.bootstrap-iso .open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.bootstrap-iso .btn-danger.disabled,
.bootstrap-iso .btn-danger[disabled],
.bootstrap-iso fieldset[disabled] .btn-danger,
.bootstrap-iso .btn-danger.disabled:hover,
.bootstrap-iso .btn-danger[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-danger:hover,
.bootstrap-iso .btn-danger.disabled:focus,
.bootstrap-iso .btn-danger[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-danger:focus,
.bootstrap-iso .btn-danger.disabled.focus,
.bootstrap-iso .btn-danger[disabled].focus,
.bootstrap-iso fieldset[disabled] .btn-danger.focus,
.bootstrap-iso .btn-danger.disabled:active,
.bootstrap-iso .btn-danger[disabled]:active,
.bootstrap-iso fieldset[disabled] .btn-danger:active,
.bootstrap-iso .btn-danger.disabled.active,
.bootstrap-iso .btn-danger[disabled].active,
.bootstrap-iso fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.bootstrap-iso .btn-danger .badge {
  color: #d9534f;
  background-color: #ffffff;
}
.bootstrap-iso .btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0;
}
.bootstrap-iso .btn-link,
.bootstrap-iso .btn-link:active,
.bootstrap-iso .btn-link.active,
.bootstrap-iso .btn-link[disabled],
.bootstrap-iso fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-iso .btn-link,
.bootstrap-iso .btn-link:hover,
.bootstrap-iso .btn-link:focus,
.bootstrap-iso .btn-link:active {
  border-color: transparent;
}
.bootstrap-iso .btn-link:hover,
.bootstrap-iso .btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.bootstrap-iso .btn-link[disabled]:hover,
.bootstrap-iso fieldset[disabled] .btn-link:hover,
.bootstrap-iso .btn-link[disabled]:focus,
.bootstrap-iso fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.bootstrap-iso .btn-lg,
.bootstrap-iso .btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 23px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-iso .btn-sm,
.bootstrap-iso .btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 16px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-iso .btn-xs,
.bootstrap-iso .btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 16px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-iso .btn-block {
  display: block;
  width: 100%;
}
.bootstrap-iso .btn-block + .btn-block {
  margin-top: 5px;
}
.bootstrap-iso input[type="submit"].btn-block,
.bootstrap-iso input[type="reset"].btn-block,
.bootstrap-iso input[type="button"].btn-block {
  width: 100%;
}
.bootstrap-iso .fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.bootstrap-iso .fade.in {
  opacity: 1;
}
.bootstrap-iso .collapse {
  display: none;
  visibility: hidden;
}
.bootstrap-iso .collapse.in {
  display: block;
  visibility: visible;
}
.bootstrap-iso tr.collapse.in {
  display: table-row;
}
.bootstrap-iso tbody.collapse.in {
  display: table-row-group;
}
.bootstrap-iso .collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.bootstrap-iso .caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.bootstrap-iso .dropup,
.bootstrap-iso .dropdown {
  position: relative;
}
.bootstrap-iso .dropdown-toggle:focus {
  outline: 0;
}
.bootstrap-iso .dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 18px;
  text-align: left;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.bootstrap-iso .dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.bootstrap-iso .dropdown-menu .divider {
  height: 1px;
  margin: 11.5px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.bootstrap-iso .dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.bootstrap-iso .dropdown-menu > li > a:hover,
.bootstrap-iso .dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.bootstrap-iso .dropdown-menu > .active > a,
.bootstrap-iso .dropdown-menu > .active > a:hover,
.bootstrap-iso .dropdown-menu > .active > a:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7;
}
.bootstrap-iso .dropdown-menu > .disabled > a,
.bootstrap-iso .dropdown-menu > .disabled > a:hover,
.bootstrap-iso .dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.bootstrap-iso .dropdown-menu > .disabled > a:hover,
.bootstrap-iso .dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  cursor: not-allowed;
}
.bootstrap-iso .open > .dropdown-menu {
  display: block;
}
.bootstrap-iso .open > a {
  outline: 0;
}
.bootstrap-iso .dropdown-menu-right {
  left: auto;
  right: 0;
}
.bootstrap-iso .dropdown-menu-left {
  left: 0;
  right: auto;
}
.bootstrap-iso .dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 16px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.bootstrap-iso .dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.bootstrap-iso .pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.bootstrap-iso .dropup .caret,
.bootstrap-iso .navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid;
  content: "";
}
.bootstrap-iso .dropup .dropdown-menu,
.bootstrap-iso .navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .bootstrap-iso .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.bootstrap-iso .btn-group,
.bootstrap-iso .btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.bootstrap-iso .btn-group > .btn,
.bootstrap-iso .btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.bootstrap-iso .btn-group > .btn:hover,
.bootstrap-iso .btn-group-vertical > .btn:hover,
.bootstrap-iso .btn-group > .btn:focus,
.bootstrap-iso .btn-group-vertical > .btn:focus,
.bootstrap-iso .btn-group > .btn:active,
.bootstrap-iso .btn-group-vertical > .btn:active,
.bootstrap-iso .btn-group > .btn.active,
.bootstrap-iso .btn-group-vertical > .btn.active {
  z-index: 2;
}
.bootstrap-iso .btn-group .btn + .btn,
.bootstrap-iso .btn-group .btn + .btn-group,
.bootstrap-iso .btn-group .btn-group + .btn,
.bootstrap-iso .btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.bootstrap-iso .btn-toolbar {
  margin-left: -5px;
}
.bootstrap-iso .btn-toolbar .btn-group,
.bootstrap-iso .btn-toolbar .input-group {
  float: left;
}
.bootstrap-iso .btn-toolbar > .btn,
.bootstrap-iso .btn-toolbar > .btn-group,
.bootstrap-iso .btn-toolbar > .input-group {
  margin-left: 5px;
}
.bootstrap-iso .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.bootstrap-iso .btn-group > .btn:first-child {
  margin-left: 0;
}
.bootstrap-iso .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.bootstrap-iso .btn-group > .btn:last-child:not(:first-child),
.bootstrap-iso .btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .btn-group > .btn-group {
  float: left;
}
.bootstrap-iso .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.bootstrap-iso .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.bootstrap-iso .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.bootstrap-iso .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .btn-group .dropdown-toggle:active,
.bootstrap-iso .btn-group.open .dropdown-toggle {
  outline: 0;
}
.bootstrap-iso .btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.bootstrap-iso .btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.bootstrap-iso .btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.bootstrap-iso .btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-iso .btn .caret {
  margin-left: 0;
}
.bootstrap-iso .btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.bootstrap-iso .dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.bootstrap-iso .btn-group-vertical > .btn,
.bootstrap-iso .btn-group-vertical > .btn-group,
.bootstrap-iso .btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.bootstrap-iso .btn-group-vertical > .btn-group > .btn {
  float: none;
}
.bootstrap-iso .btn-group-vertical > .btn + .btn,
.bootstrap-iso .btn-group-vertical > .btn + .btn-group,
.bootstrap-iso .btn-group-vertical > .btn-group + .btn,
.bootstrap-iso .btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.bootstrap-iso .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.bootstrap-iso .btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bootstrap-iso .btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 4px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.bootstrap-iso .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.bootstrap-iso .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bootstrap-iso .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.bootstrap-iso .btn-group-justified > .btn,
.bootstrap-iso .btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.bootstrap-iso .btn-group-justified > .btn-group .btn {
  width: 100%;
}
.bootstrap-iso .btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
.bootstrap-iso [data-toggle="buttons"] > .btn input[type="radio"],
.bootstrap-iso [data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
.bootstrap-iso [data-toggle="buttons"] > .btn input[type="checkbox"],
.bootstrap-iso [data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.bootstrap-iso .input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.bootstrap-iso .input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.bootstrap-iso .input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.bootstrap-iso .input-group-lg > .form-control,
.bootstrap-iso .input-group-lg > .input-group-addon,
.bootstrap-iso .input-group-lg > .input-group-btn > .btn {
  height: 53px;
  padding: 10px 16px;
  font-size: 23px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-iso select.input-group-lg > .form-control,
.bootstrap-iso select.input-group-lg > .input-group-addon,
.bootstrap-iso select.input-group-lg > .input-group-btn > .btn {
  height: 53px;
  line-height: 53px;
}
.bootstrap-iso textarea.input-group-lg > .form-control,
.bootstrap-iso textarea.input-group-lg > .input-group-addon,
.bootstrap-iso textarea.input-group-lg > .input-group-btn > .btn,
.bootstrap-iso select[multiple].input-group-lg > .form-control,
.bootstrap-iso select[multiple].input-group-lg > .input-group-addon,
.bootstrap-iso select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.bootstrap-iso .input-group-sm > .form-control,
.bootstrap-iso .input-group-sm > .input-group-addon,
.bootstrap-iso .input-group-sm > .input-group-btn > .btn {
  height: 36px;
  padding: 5px 10px;
  font-size: 16px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-iso select.input-group-sm > .form-control,
.bootstrap-iso select.input-group-sm > .input-group-addon,
.bootstrap-iso select.input-group-sm > .input-group-btn > .btn {
  height: 36px;
  line-height: 36px;
}
.bootstrap-iso textarea.input-group-sm > .form-control,
.bootstrap-iso textarea.input-group-sm > .input-group-addon,
.bootstrap-iso textarea.input-group-sm > .input-group-btn > .btn,
.bootstrap-iso select[multiple].input-group-sm > .form-control,
.bootstrap-iso select[multiple].input-group-sm > .input-group-addon,
.bootstrap-iso select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.bootstrap-iso .input-group-addon,
.bootstrap-iso .input-group-btn,
.bootstrap-iso .input-group .form-control {
  display: table-cell;
}
.bootstrap-iso .input-group-addon:not(:first-child):not(:last-child),
.bootstrap-iso .input-group-btn:not(:first-child):not(:last-child),
.bootstrap-iso .input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.bootstrap-iso .input-group-addon,
.bootstrap-iso .input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.bootstrap-iso .input-group-addon {
  padding: 6px 12px;
  font-size: 18px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
.bootstrap-iso .input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 3px;
}
.bootstrap-iso .input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 23px;
  border-radius: 6px;
}
.bootstrap-iso .input-group-addon input[type="radio"],
.bootstrap-iso .input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.bootstrap-iso .input-group .form-control:first-child,
.bootstrap-iso .input-group-addon:first-child,
.bootstrap-iso .input-group-btn:first-child > .btn,
.bootstrap-iso .input-group-btn:first-child > .btn-group > .btn,
.bootstrap-iso .input-group-btn:first-child > .dropdown-toggle,
.bootstrap-iso .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.bootstrap-iso .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.bootstrap-iso .input-group-addon:first-child {
  border-right: 0;
}
.bootstrap-iso .input-group .form-control:last-child,
.bootstrap-iso .input-group-addon:last-child,
.bootstrap-iso .input-group-btn:last-child > .btn,
.bootstrap-iso .input-group-btn:last-child > .btn-group > .btn,
.bootstrap-iso .input-group-btn:last-child > .dropdown-toggle,
.bootstrap-iso .input-group-btn:first-child > .btn:not(:first-child),
.bootstrap-iso .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .input-group-addon:last-child {
  border-left: 0;
}
.bootstrap-iso .input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.bootstrap-iso .input-group-btn > .btn {
  position: relative;
}
.bootstrap-iso .input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.bootstrap-iso .input-group-btn > .btn:hover,
.bootstrap-iso .input-group-btn > .btn:focus,
.bootstrap-iso .input-group-btn > .btn:active {
  z-index: 2;
}
.bootstrap-iso .input-group-btn:first-child > .btn,
.bootstrap-iso .input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.bootstrap-iso .input-group-btn:last-child > .btn,
.bootstrap-iso .input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.bootstrap-iso .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bootstrap-iso .nav > li {
  position: relative;
  display: block;
}
.bootstrap-iso .nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.bootstrap-iso .nav > li > a:hover,
.bootstrap-iso .nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.bootstrap-iso .nav > li.disabled > a {
  color: #777777;
}
.bootstrap-iso .nav > li.disabled > a:hover,
.bootstrap-iso .nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.bootstrap-iso .nav .open > a,
.bootstrap-iso .nav .open > a:hover,
.bootstrap-iso .nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #337ab7;
}
.bootstrap-iso .nav .nav-divider {
  height: 1px;
  margin: 11.5px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.bootstrap-iso .nav > li > a > img {
  max-width: none;
}
.bootstrap-iso .nav-tabs {
  border-bottom: 1px solid #dddddd;
}
.bootstrap-iso .nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.bootstrap-iso .nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.bootstrap-iso .nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}
.bootstrap-iso .nav-tabs > li.active > a,
.bootstrap-iso .nav-tabs > li.active > a:hover,
.bootstrap-iso .nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-bottom-color: transparent;
  cursor: default;
}
.bootstrap-iso .nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.bootstrap-iso .nav-tabs.nav-justified > li {
  float: none;
}
.bootstrap-iso .nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.bootstrap-iso .nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .bootstrap-iso .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .bootstrap-iso .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.bootstrap-iso .nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.bootstrap-iso .nav-tabs.nav-justified > .active > a,
.bootstrap-iso .nav-tabs.nav-justified > .active > a:hover,
.bootstrap-iso .nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #dddddd;
}
@media (min-width: 768px) {
  .bootstrap-iso .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #dddddd;
    border-radius: 4px 4px 0 0;
  }
  .bootstrap-iso .nav-tabs.nav-justified > .active > a,
  .bootstrap-iso .nav-tabs.nav-justified > .active > a:hover,
  .bootstrap-iso .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #ffffff;
  }
}
.bootstrap-iso .nav-pills > li {
  float: left;
}
.bootstrap-iso .nav-pills > li > a {
  border-radius: 4px;
}
.bootstrap-iso .nav-pills > li + li {
  margin-left: 2px;
}
.bootstrap-iso .nav-pills > li.active > a,
.bootstrap-iso .nav-pills > li.active > a:hover,
.bootstrap-iso .nav-pills > li.active > a:focus {
  color: #ffffff;
  background-color: #337ab7;
}
.bootstrap-iso .nav-stacked > li {
  float: none;
}
.bootstrap-iso .nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.bootstrap-iso .nav-justified {
  width: 100%;
}
.bootstrap-iso .nav-justified > li {
  float: none;
}
.bootstrap-iso .nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.bootstrap-iso .nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .bootstrap-iso .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .bootstrap-iso .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.bootstrap-iso .nav-tabs-justified {
  border-bottom: 0;
}
.bootstrap-iso .nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.bootstrap-iso .nav-tabs-justified > .active > a,
.bootstrap-iso .nav-tabs-justified > .active > a:hover,
.bootstrap-iso .nav-tabs-justified > .active > a:focus {
  border: 1px solid #dddddd;
}
@media (min-width: 768px) {
  .bootstrap-iso .nav-tabs-justified > li > a {
    border-bottom: 1px solid #dddddd;
    border-radius: 4px 4px 0 0;
  }
  .bootstrap-iso .nav-tabs-justified > .active > a,
  .bootstrap-iso .nav-tabs-justified > .active > a:hover,
  .bootstrap-iso .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #ffffff;
  }
}
.bootstrap-iso .tab-content > .tab-pane {
  display: none;
  visibility: hidden;
}
.bootstrap-iso .tab-content > .active {
  display: block;
  visibility: visible;
}
.bootstrap-iso .nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 25px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-header {
    float: left;
  }
}
.bootstrap-iso .navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.bootstrap-iso .navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .bootstrap-iso .navbar-collapse.collapse {
    display: block !important;
    visibility: visible !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .bootstrap-iso .navbar-collapse.in {
    overflow-y: visible;
  }
  .bootstrap-iso .navbar-fixed-top .navbar-collapse,
  .bootstrap-iso .navbar-static-top .navbar-collapse,
  .bootstrap-iso .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.bootstrap-iso .navbar-fixed-top .navbar-collapse,
.bootstrap-iso .navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .bootstrap-iso .navbar-fixed-top .navbar-collapse,
  .bootstrap-iso .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.bootstrap-iso .container > .navbar-header,
.bootstrap-iso .container-fluid > .navbar-header,
.bootstrap-iso .container > .navbar-collapse,
.bootstrap-iso .container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .bootstrap-iso .container > .navbar-header,
  .bootstrap-iso .container-fluid > .navbar-header,
  .bootstrap-iso .container > .navbar-collapse,
  .bootstrap-iso .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.bootstrap-iso .navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-static-top {
    border-radius: 0;
  }
}
.bootstrap-iso .navbar-fixed-top,
.bootstrap-iso .navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-fixed-top,
  .bootstrap-iso .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.bootstrap-iso .navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.bootstrap-iso .navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.bootstrap-iso .navbar-brand {
  float: left;
  padding: 12.5px 15px;
  font-size: 23px;
  line-height: 25px;
  height: 50px;
}
.bootstrap-iso .navbar-brand:hover,
.bootstrap-iso .navbar-brand:focus {
  text-decoration: none;
}
.bootstrap-iso .navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar > .container .navbar-brand,
  .bootstrap-iso .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.bootstrap-iso .navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.bootstrap-iso .navbar-toggle:focus {
  outline: 0;
}
.bootstrap-iso .navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.bootstrap-iso .navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-toggle {
    display: none;
  }
}
.bootstrap-iso .navbar-nav {
  margin: 6.25px -15px;
}
.bootstrap-iso .navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 25px;
}
@media (max-width: 767px) {
  .bootstrap-iso .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .bootstrap-iso .navbar-nav .open .dropdown-menu > li > a,
  .bootstrap-iso .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .bootstrap-iso .navbar-nav .open .dropdown-menu > li > a {
    line-height: 25px;
  }
  .bootstrap-iso .navbar-nav .open .dropdown-menu > li > a:hover,
  .bootstrap-iso .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-nav {
    float: left;
    margin: 0;
  }
  .bootstrap-iso .navbar-nav > li {
    float: left;
  }
  .bootstrap-iso .navbar-nav > li > a {
    padding-top: 12.5px;
    padding-bottom: 12.5px;
  }
}
.bootstrap-iso .navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 5.5px;
  margin-bottom: 5.5px;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-iso .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .bootstrap-iso .navbar-form .form-control-static {
    display: inline-block;
  }
  .bootstrap-iso .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .bootstrap-iso .navbar-form .input-group .input-group-addon,
  .bootstrap-iso .navbar-form .input-group .input-group-btn,
  .bootstrap-iso .navbar-form .input-group .form-control {
    width: auto;
  }
  .bootstrap-iso .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .bootstrap-iso .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-iso .navbar-form .radio,
  .bootstrap-iso .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-iso .navbar-form .radio label,
  .bootstrap-iso .navbar-form .checkbox label {
    padding-left: 0;
  }
  .bootstrap-iso .navbar-form .radio input[type="radio"],
  .bootstrap-iso .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .bootstrap-iso .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .bootstrap-iso .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .bootstrap-iso .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.bootstrap-iso .navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-iso .navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bootstrap-iso .navbar-btn {
  margin-top: 5.5px;
  margin-bottom: 5.5px;
}
.bootstrap-iso .navbar-btn.btn-sm {
  margin-top: 7px;
  margin-bottom: 7px;
}
.bootstrap-iso .navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.bootstrap-iso .navbar-text {
  margin-top: 12.5px;
  margin-bottom: 12.5px;
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
}
@media (min-width: 768px) {
  .bootstrap-iso .navbar-left {
    float: left !important;
  }
  .bootstrap-iso .navbar-right {
    float: right !important;
    margin-right: -15px;
  }
  .bootstrap-iso .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.bootstrap-iso .navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.bootstrap-iso .navbar-default .navbar-brand {
  color: #777777;
}
.bootstrap-iso .navbar-default .navbar-brand:hover,
.bootstrap-iso .navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.bootstrap-iso .navbar-default .navbar-text {
  color: #777777;
}
.bootstrap-iso .navbar-default .navbar-nav > li > a {
  color: #777777;
}
.bootstrap-iso .navbar-default .navbar-nav > li > a:hover,
.bootstrap-iso .navbar-default .navbar-nav > li > a:focus {
  color: #333333;
  background-color: transparent;
}
.bootstrap-iso .navbar-default .navbar-nav > .active > a,
.bootstrap-iso .navbar-default .navbar-nav > .active > a:hover,
.bootstrap-iso .navbar-default .navbar-nav > .active > a:focus {
  color: #555555;
  background-color: #e7e7e7;
}
.bootstrap-iso .navbar-default .navbar-nav > .disabled > a,
.bootstrap-iso .navbar-default .navbar-nav > .disabled > a:hover,
.bootstrap-iso .navbar-default .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.bootstrap-iso .navbar-default .navbar-toggle {
  border-color: #dddddd;
}
.bootstrap-iso .navbar-default .navbar-toggle:hover,
.bootstrap-iso .navbar-default .navbar-toggle:focus {
  background-color: #dddddd;
}
.bootstrap-iso .navbar-default .navbar-toggle .icon-bar {
  background-color: #888888;
}
.bootstrap-iso .navbar-default .navbar-collapse,
.bootstrap-iso .navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.bootstrap-iso .navbar-default .navbar-nav > .open > a,
.bootstrap-iso .navbar-default .navbar-nav > .open > a:hover,
.bootstrap-iso .navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555555;
}
@media (max-width: 767px) {
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777777;
  }
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333333;
    background-color: transparent;
  }
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555555;
    background-color: #e7e7e7;
  }
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .bootstrap-iso .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.bootstrap-iso .navbar-default .navbar-link {
  color: #777777;
}
.bootstrap-iso .navbar-default .navbar-link:hover {
  color: #333333;
}
.bootstrap-iso .navbar-default .btn-link {
  color: #777777;
}
.bootstrap-iso .navbar-default .btn-link:hover,
.bootstrap-iso .navbar-default .btn-link:focus {
  color: #333333;
}
.bootstrap-iso .navbar-default .btn-link[disabled]:hover,
.bootstrap-iso fieldset[disabled] .navbar-default .btn-link:hover,
.bootstrap-iso .navbar-default .btn-link[disabled]:focus,
.bootstrap-iso fieldset[disabled] .navbar-default .btn-link:focus {
  color: #cccccc;
}
.bootstrap-iso .navbar-inverse {
  background-color: #222222;
  border-color: #080808;
}
.bootstrap-iso .navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.bootstrap-iso .navbar-inverse .navbar-brand:hover,
.bootstrap-iso .navbar-inverse .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}
.bootstrap-iso .navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.bootstrap-iso .navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.bootstrap-iso .navbar-inverse .navbar-nav > li > a:hover,
.bootstrap-iso .navbar-inverse .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}
.bootstrap-iso .navbar-inverse .navbar-nav > .active > a,
.bootstrap-iso .navbar-inverse .navbar-nav > .active > a:hover,
.bootstrap-iso .navbar-inverse .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #080808;
}
.bootstrap-iso .navbar-inverse .navbar-nav > .disabled > a,
.bootstrap-iso .navbar-inverse .navbar-nav > .disabled > a:hover,
.bootstrap-iso .navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}
.bootstrap-iso .navbar-inverse .navbar-toggle {
  border-color: #333333;
}
.bootstrap-iso .navbar-inverse .navbar-toggle:hover,
.bootstrap-iso .navbar-inverse .navbar-toggle:focus {
  background-color: #333333;
}
.bootstrap-iso .navbar-inverse .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.bootstrap-iso .navbar-inverse .navbar-collapse,
.bootstrap-iso .navbar-inverse .navbar-form {
  border-color: #101010;
}
.bootstrap-iso .navbar-inverse .navbar-nav > .open > a,
.bootstrap-iso .navbar-inverse .navbar-nav > .open > a:hover,
.bootstrap-iso .navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #ffffff;
}
@media (max-width: 767px) {
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #080808;
  }
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .bootstrap-iso .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}
.bootstrap-iso .navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.bootstrap-iso .navbar-inverse .navbar-link:hover {
  color: #ffffff;
}
.bootstrap-iso .navbar-inverse .btn-link {
  color: #9d9d9d;
}
.bootstrap-iso .navbar-inverse .btn-link:hover,
.bootstrap-iso .navbar-inverse .btn-link:focus {
  color: #ffffff;
}
.bootstrap-iso .navbar-inverse .btn-link[disabled]:hover,
.bootstrap-iso fieldset[disabled] .navbar-inverse .btn-link:hover,
.bootstrap-iso .navbar-inverse .btn-link[disabled]:focus,
.bootstrap-iso fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444444;
}
.bootstrap-iso .breadcrumb {
  padding: 8px 15px;
  margin-bottom: 25px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.bootstrap-iso .breadcrumb > li {
  display: inline-block;
}
.bootstrap-iso .breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #cccccc;
}
.bootstrap-iso .breadcrumb > .active {
  color: #777777;
}
.bootstrap-iso .pagination {
  display: inline-block;
  padding-left: 0;
  margin: 25px 0;
  border-radius: 4px;
}
.bootstrap-iso .pagination > li {
  display: inline;
}
.bootstrap-iso .pagination > li > a,
.bootstrap-iso .pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  margin-left: -1px;
}
.bootstrap-iso .pagination > li:first-child > a,
.bootstrap-iso .pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.bootstrap-iso .pagination > li:last-child > a,
.bootstrap-iso .pagination > li:last-child > span {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.bootstrap-iso .pagination > li > a:hover,
.bootstrap-iso .pagination > li > span:hover,
.bootstrap-iso .pagination > li > a:focus,
.bootstrap-iso .pagination > li > span:focus {
  color: #23527c;
  background-color: #eeeeee;
  border-color: #dddddd;
}
.bootstrap-iso .pagination > .active > a,
.bootstrap-iso .pagination > .active > span,
.bootstrap-iso .pagination > .active > a:hover,
.bootstrap-iso .pagination > .active > span:hover,
.bootstrap-iso .pagination > .active > a:focus,
.bootstrap-iso .pagination > .active > span:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.bootstrap-iso .pagination > .disabled > span,
.bootstrap-iso .pagination > .disabled > span:hover,
.bootstrap-iso .pagination > .disabled > span:focus,
.bootstrap-iso .pagination > .disabled > a,
.bootstrap-iso .pagination > .disabled > a:hover,
.bootstrap-iso .pagination > .disabled > a:focus {
  color: #777777;
  background-color: #ffffff;
  border-color: #dddddd;
  cursor: not-allowed;
}
.bootstrap-iso .pagination-lg > li > a,
.bootstrap-iso .pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 23px;
}
.bootstrap-iso .pagination-lg > li:first-child > a,
.bootstrap-iso .pagination-lg > li:first-child > span {
  border-bottom-left-radius: 6px;
  border-top-left-radius: 6px;
}
.bootstrap-iso .pagination-lg > li:last-child > a,
.bootstrap-iso .pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
}
.bootstrap-iso .pagination-sm > li > a,
.bootstrap-iso .pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 16px;
}
.bootstrap-iso .pagination-sm > li:first-child > a,
.bootstrap-iso .pagination-sm > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-iso .pagination-sm > li:last-child > a,
.bootstrap-iso .pagination-sm > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.bootstrap-iso .pager {
  padding-left: 0;
  margin: 25px 0;
  list-style: none;
  text-align: center;
}
.bootstrap-iso .pager li {
  display: inline;
}
.bootstrap-iso .pager li > a,
.bootstrap-iso .pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 15px;
}
.bootstrap-iso .pager li > a:hover,
.bootstrap-iso .pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.bootstrap-iso .pager .next > a,
.bootstrap-iso .pager .next > span {
  float: right;
}
.bootstrap-iso .pager .previous > a,
.bootstrap-iso .pager .previous > span {
  float: left;
}
.bootstrap-iso .pager .disabled > a,
.bootstrap-iso .pager .disabled > a:hover,
.bootstrap-iso .pager .disabled > a:focus,
.bootstrap-iso .pager .disabled > span {
  color: #777777;
  background-color: #ffffff;
  cursor: not-allowed;
}
.bootstrap-iso .label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.bootstrap-iso a.label:hover,
.bootstrap-iso a.label:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.bootstrap-iso .label:empty {
  display: none;
}
.bootstrap-iso .btn .label {
  position: relative;
  top: -1px;
}
.bootstrap-iso .label-default {
  background-color: #777777;
}
.bootstrap-iso .label-default[href]:hover,
.bootstrap-iso .label-default[href]:focus {
  background-color: #5e5e5e;
}
.bootstrap-iso .label-primary {
  background-color: #337ab7;
}
.bootstrap-iso .label-primary[href]:hover,
.bootstrap-iso .label-primary[href]:focus {
  background-color: #286090;
}
.bootstrap-iso .label-success {
  background-color: #5cb85c;
}
.bootstrap-iso .label-success[href]:hover,
.bootstrap-iso .label-success[href]:focus {
  background-color: #449d44;
}
.bootstrap-iso .label-info {
  background-color: #5bc0de;
}
.bootstrap-iso .label-info[href]:hover,
.bootstrap-iso .label-info[href]:focus {
  background-color: #31b0d5;
}
.bootstrap-iso .label-warning {
  background-color: #f0ad4e;
}
.bootstrap-iso .label-warning[href]:hover,
.bootstrap-iso .label-warning[href]:focus {
  background-color: #ec971f;
}
.bootstrap-iso .label-danger {
  background-color: #d9534f;
}
.bootstrap-iso .label-danger[href]:hover,
.bootstrap-iso .label-danger[href]:focus {
  background-color: #c9302c;
}
.bootstrap-iso .badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 16px;
  font-weight: bold;
  color: #ffffff;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.bootstrap-iso .badge:empty {
  display: none;
}
.bootstrap-iso .btn .badge {
  position: relative;
  top: -1px;
}
.bootstrap-iso .btn-xs .badge,
.bootstrap-iso .btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
.bootstrap-iso a.badge:hover,
.bootstrap-iso a.badge:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.bootstrap-iso .list-group-item.active > .badge,
.bootstrap-iso .nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #ffffff;
}
.bootstrap-iso .list-group-item > .badge {
  float: right;
}
.bootstrap-iso .list-group-item > .badge + .badge {
  margin-right: 5px;
}
.bootstrap-iso .nav-pills > li > a > .badge {
  margin-left: 3px;
}
.bootstrap-iso .jumbotron {
  padding: 30px 15px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.bootstrap-iso .jumbotron h1,
.bootstrap-iso .jumbotron .h1 {
  color: inherit;
}
.bootstrap-iso .jumbotron p {
  margin-bottom: 15px;
  font-size: 27px;
  font-weight: 200;
}
.bootstrap-iso .jumbotron > hr {
  border-top-color: #d5d5d5;
}
.bootstrap-iso .container .jumbotron,
.bootstrap-iso .container-fluid .jumbotron {
  border-radius: 6px;
}
.bootstrap-iso .jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .bootstrap-iso .jumbotron {
    padding: 48px 0;
  }
  .bootstrap-iso .container .jumbotron,
  .bootstrap-iso .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .bootstrap-iso .jumbotron h1,
  .bootstrap-iso .jumbotron .h1 {
    font-size: 81px;
  }
}
.bootstrap-iso .thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 25px;
  line-height: 1.42857143;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.bootstrap-iso .thumbnail > img,
.bootstrap-iso .thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
.bootstrap-iso a.thumbnail:hover,
.bootstrap-iso a.thumbnail:focus,
.bootstrap-iso a.thumbnail.active {
  border-color: #337ab7;
}
.bootstrap-iso .thumbnail .caption {
  padding: 9px;
  color: #333333;
}
.bootstrap-iso .alert {
  padding: 15px;
  margin-bottom: 25px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.bootstrap-iso .alert h4 {
  margin-top: 0;
  color: inherit;
}
.bootstrap-iso .alert .alert-link {
  font-weight: bold;
}
.bootstrap-iso .alert > p,
.bootstrap-iso .alert > ul {
  margin-bottom: 0;
}
.bootstrap-iso .alert > p + p {
  margin-top: 5px;
}
.bootstrap-iso .alert-dismissable,
.bootstrap-iso .alert-dismissible {
  padding-right: 35px;
}
.bootstrap-iso .alert-dismissable .close,
.bootstrap-iso .alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.bootstrap-iso .alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.bootstrap-iso .alert-success hr {
  border-top-color: #c9e2b3;
}
.bootstrap-iso .alert-success .alert-link {
  color: #2b542c;
}
.bootstrap-iso .alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.bootstrap-iso .alert-info hr {
  border-top-color: #a6e1ec;
}
.bootstrap-iso .alert-info .alert-link {
  color: #245269;
}
.bootstrap-iso .alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.bootstrap-iso .alert-warning hr {
  border-top-color: #f7e1b5;
}
.bootstrap-iso .alert-warning .alert-link {
  color: #66512c;
}
.bootstrap-iso .alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.bootstrap-iso .alert-danger hr {
  border-top-color: #e4b9c0;
}
.bootstrap-iso .alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.bootstrap-iso .progress {
  overflow: hidden;
  height: 25px;
  margin-bottom: 25px;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.bootstrap-iso .progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 16px;
  line-height: 25px;
  color: #ffffff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.bootstrap-iso .progress-striped .progress-bar,
.bootstrap-iso .progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.bootstrap-iso .progress.active .progress-bar,
.bootstrap-iso .progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.bootstrap-iso .progress-bar-success {
  background-color: #5cb85c;
}
.bootstrap-iso .progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-iso .progress-bar-info {
  background-color: #5bc0de;
}
.bootstrap-iso .progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-iso .progress-bar-warning {
  background-color: #f0ad4e;
}
.bootstrap-iso .progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-iso .progress-bar-danger {
  background-color: #d9534f;
}
.bootstrap-iso .progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-iso .media {
  margin-top: 15px;
}
.bootstrap-iso .media:first-child {
  margin-top: 0;
}
.bootstrap-iso .media,
.bootstrap-iso .media-body {
  zoom: 1;
  overflow: hidden;
}
.bootstrap-iso .media-body {
  width: 10000px;
}
.bootstrap-iso .media-object {
  display: block;
}
.bootstrap-iso .media-right,
.bootstrap-iso .media > .pull-right {
  padding-left: 10px;
}
.bootstrap-iso .media-left,
.bootstrap-iso .media > .pull-left {
  padding-right: 10px;
}
.bootstrap-iso .media-left,
.bootstrap-iso .media-right,
.bootstrap-iso .media-body {
  display: table-cell;
  vertical-align: top;
}
.bootstrap-iso .media-middle {
  vertical-align: middle;
}
.bootstrap-iso .media-bottom {
  vertical-align: bottom;
}
.bootstrap-iso .media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.bootstrap-iso .media-list {
  padding-left: 0;
  list-style: none;
}
.bootstrap-iso .list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.bootstrap-iso .list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
}
.bootstrap-iso .list-group-item:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.bootstrap-iso .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.bootstrap-iso a.list-group-item {
  color: #555555;
}
.bootstrap-iso a.list-group-item .list-group-item-heading {
  color: #333333;
}
.bootstrap-iso a.list-group-item:hover,
.bootstrap-iso a.list-group-item:focus {
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
}
.bootstrap-iso .list-group-item.disabled,
.bootstrap-iso .list-group-item.disabled:hover,
.bootstrap-iso .list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.bootstrap-iso .list-group-item.disabled .list-group-item-heading,
.bootstrap-iso .list-group-item.disabled:hover .list-group-item-heading,
.bootstrap-iso .list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.bootstrap-iso .list-group-item.disabled .list-group-item-text,
.bootstrap-iso .list-group-item.disabled:hover .list-group-item-text,
.bootstrap-iso .list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.bootstrap-iso .list-group-item.active,
.bootstrap-iso .list-group-item.active:hover,
.bootstrap-iso .list-group-item.active:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.bootstrap-iso .list-group-item.active .list-group-item-heading,
.bootstrap-iso .list-group-item.active:hover .list-group-item-heading,
.bootstrap-iso .list-group-item.active:focus .list-group-item-heading,
.bootstrap-iso .list-group-item.active .list-group-item-heading > small,
.bootstrap-iso .list-group-item.active:hover .list-group-item-heading > small,
.bootstrap-iso .list-group-item.active:focus .list-group-item-heading > small,
.bootstrap-iso .list-group-item.active .list-group-item-heading > .small,
.bootstrap-iso .list-group-item.active:hover .list-group-item-heading > .small,
.bootstrap-iso .list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.bootstrap-iso .list-group-item.active .list-group-item-text,
.bootstrap-iso .list-group-item.active:hover .list-group-item-text,
.bootstrap-iso .list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.bootstrap-iso .list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
.bootstrap-iso a.list-group-item-success {
  color: #3c763d;
}
.bootstrap-iso a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
.bootstrap-iso a.list-group-item-success:hover,
.bootstrap-iso a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
.bootstrap-iso a.list-group-item-success.active,
.bootstrap-iso a.list-group-item-success.active:hover,
.bootstrap-iso a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.bootstrap-iso .list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
.bootstrap-iso a.list-group-item-info {
  color: #31708f;
}
.bootstrap-iso a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
.bootstrap-iso a.list-group-item-info:hover,
.bootstrap-iso a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
.bootstrap-iso a.list-group-item-info.active,
.bootstrap-iso a.list-group-item-info.active:hover,
.bootstrap-iso a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.bootstrap-iso .list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
.bootstrap-iso a.list-group-item-warning {
  color: #8a6d3b;
}
.bootstrap-iso a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
.bootstrap-iso a.list-group-item-warning:hover,
.bootstrap-iso a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
.bootstrap-iso a.list-group-item-warning.active,
.bootstrap-iso a.list-group-item-warning.active:hover,
.bootstrap-iso a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.bootstrap-iso .list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
.bootstrap-iso a.list-group-item-danger {
  color: #a94442;
}
.bootstrap-iso a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
.bootstrap-iso a.list-group-item-danger:hover,
.bootstrap-iso a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
.bootstrap-iso a.list-group-item-danger.active,
.bootstrap-iso a.list-group-item-danger.active:hover,
.bootstrap-iso a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.bootstrap-iso .list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.bootstrap-iso .list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.bootstrap-iso .panel {
  margin-bottom: 25px;
  background-color: #ffffff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.bootstrap-iso .panel-body {
  padding: 15px;
}
.bootstrap-iso .panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-iso .panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.bootstrap-iso .panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 21px;
  color: inherit;
}
.bootstrap-iso .panel-title > a,
.bootstrap-iso .panel-title > small,
.bootstrap-iso .panel-title > .small,
.bootstrap-iso .panel-title > small > a,
.bootstrap-iso .panel-title > .small > a {
  color: inherit;
}
.bootstrap-iso .panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #dddddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.bootstrap-iso .panel > .list-group,
.bootstrap-iso .panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.bootstrap-iso .panel > .list-group .list-group-item,
.bootstrap-iso .panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.bootstrap-iso .panel > .list-group:first-child .list-group-item:first-child,
.bootstrap-iso .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-iso .panel > .list-group:last-child .list-group-item:last-child,
.bootstrap-iso .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.bootstrap-iso .panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.bootstrap-iso .list-group + .panel-footer {
  border-top-width: 0;
}
.bootstrap-iso .panel > .table,
.bootstrap-iso .panel > .table-responsive > .table,
.bootstrap-iso .panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.bootstrap-iso .panel > .table caption,
.bootstrap-iso .panel > .table-responsive > .table caption,
.bootstrap-iso .panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.bootstrap-iso .panel > .table:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-iso .panel > .table:first-child > thead:first-child > tr:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.bootstrap-iso .panel > .table:first-child > tbody:first-child > tr:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.bootstrap-iso .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.bootstrap-iso .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.bootstrap-iso .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.bootstrap-iso .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.bootstrap-iso .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.bootstrap-iso .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.bootstrap-iso .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.bootstrap-iso .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.bootstrap-iso .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.bootstrap-iso .panel > .table:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.bootstrap-iso .panel > .table:last-child > tbody:last-child > tr:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.bootstrap-iso .panel > .table:last-child > tfoot:last-child > tr:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.bootstrap-iso .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.bootstrap-iso .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.bootstrap-iso .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.bootstrap-iso .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.bootstrap-iso .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.bootstrap-iso .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.bootstrap-iso .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.bootstrap-iso .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.bootstrap-iso .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.bootstrap-iso .panel > .panel-body + .table,
.bootstrap-iso .panel > .panel-body + .table-responsive,
.bootstrap-iso .panel > .table + .panel-body,
.bootstrap-iso .panel > .table-responsive + .panel-body {
  border-top: 1px solid #dddddd;
}
.bootstrap-iso .panel > .table > tbody:first-child > tr:first-child th,
.bootstrap-iso .panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.bootstrap-iso .panel > .table-bordered,
.bootstrap-iso .panel > .table-responsive > .table-bordered {
  border: 0;
}
.bootstrap-iso .panel > .table-bordered > thead > tr > th:first-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.bootstrap-iso .panel > .table-bordered > tbody > tr > th:first-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.bootstrap-iso .panel > .table-bordered > tfoot > tr > th:first-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.bootstrap-iso .panel > .table-bordered > thead > tr > td:first-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.bootstrap-iso .panel > .table-bordered > tbody > tr > td:first-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.bootstrap-iso .panel > .table-bordered > tfoot > tr > td:first-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.bootstrap-iso .panel > .table-bordered > thead > tr > th:last-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.bootstrap-iso .panel > .table-bordered > tbody > tr > th:last-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.bootstrap-iso .panel > .table-bordered > tfoot > tr > th:last-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.bootstrap-iso .panel > .table-bordered > thead > tr > td:last-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.bootstrap-iso .panel > .table-bordered > tbody > tr > td:last-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.bootstrap-iso .panel > .table-bordered > tfoot > tr > td:last-child,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.bootstrap-iso .panel > .table-bordered > thead > tr:first-child > td,
.bootstrap-iso .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.bootstrap-iso .panel > .table-bordered > tbody > tr:first-child > td,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.bootstrap-iso .panel > .table-bordered > thead > tr:first-child > th,
.bootstrap-iso .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.bootstrap-iso .panel > .table-bordered > tbody > tr:first-child > th,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.bootstrap-iso .panel > .table-bordered > tbody > tr:last-child > td,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.bootstrap-iso .panel > .table-bordered > tfoot > tr:last-child > td,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.bootstrap-iso .panel > .table-bordered > tbody > tr:last-child > th,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.bootstrap-iso .panel > .table-bordered > tfoot > tr:last-child > th,
.bootstrap-iso .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.bootstrap-iso .panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.bootstrap-iso .panel-group {
  margin-bottom: 25px;
}
.bootstrap-iso .panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.bootstrap-iso .panel-group .panel + .panel {
  margin-top: 5px;
}
.bootstrap-iso .panel-group .panel-heading {
  border-bottom: 0;
}
.bootstrap-iso .panel-group .panel-heading + .panel-collapse > .panel-body,
.bootstrap-iso .panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #dddddd;
}
.bootstrap-iso .panel-group .panel-footer {
  border-top: 0;
}
.bootstrap-iso .panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #dddddd;
}
.bootstrap-iso .panel-default {
  border-color: #dddddd;
}
.bootstrap-iso .panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #dddddd;
}
.bootstrap-iso .panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #dddddd;
}
.bootstrap-iso .panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.bootstrap-iso .panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #dddddd;
}
.bootstrap-iso .panel-primary {
  border-color: #337ab7;
}
.bootstrap-iso .panel-primary > .panel-heading {
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.bootstrap-iso .panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.bootstrap-iso .panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #ffffff;
}
.bootstrap-iso .panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.bootstrap-iso .panel-success {
  border-color: #d6e9c6;
}
.bootstrap-iso .panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.bootstrap-iso .panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.bootstrap-iso .panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.bootstrap-iso .panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.bootstrap-iso .panel-info {
  border-color: #bce8f1;
}
.bootstrap-iso .panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.bootstrap-iso .panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.bootstrap-iso .panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.bootstrap-iso .panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.bootstrap-iso .panel-warning {
  border-color: #faebcc;
}
.bootstrap-iso .panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.bootstrap-iso .panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.bootstrap-iso .panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.bootstrap-iso .panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.bootstrap-iso .panel-danger {
  border-color: #ebccd1;
}
.bootstrap-iso .panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.bootstrap-iso .panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.bootstrap-iso .panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.bootstrap-iso .panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.bootstrap-iso .embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.bootstrap-iso .embed-responsive .embed-responsive-item,
.bootstrap-iso .embed-responsive iframe,
.bootstrap-iso .embed-responsive embed,
.bootstrap-iso .embed-responsive object,
.bootstrap-iso .embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.bootstrap-iso .embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.bootstrap-iso .embed-responsive-4by3 {
  padding-bottom: 75%;
}
.bootstrap-iso .well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.bootstrap-iso .well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.bootstrap-iso .well-lg {
  padding: 24px;
  border-radius: 6px;
}
.bootstrap-iso .well-sm {
  padding: 9px;
  border-radius: 3px;
}
.bootstrap-iso .close {
  float: right;
  font-size: 27px;
  font-weight: bold;
  line-height: 1;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.bootstrap-iso .close:hover,
.bootstrap-iso .close:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.bootstrap-iso button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.bootstrap-iso .modal-open {
  overflow: hidden;
}
.bootstrap-iso .modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.bootstrap-iso .modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.bootstrap-iso .modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.bootstrap-iso .modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.bootstrap-iso .modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.bootstrap-iso .modal-content {
  position: relative;
  background-color: #ffffff;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.bootstrap-iso .modal-backdrop {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  background-color: #000000;
}
.bootstrap-iso .modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.bootstrap-iso .modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.bootstrap-iso .modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857143px;
}
.bootstrap-iso .modal-header .close {
  margin-top: -2px;
}
.bootstrap-iso .modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.bootstrap-iso .modal-body {
  position: relative;
  padding: 15px;
}
.bootstrap-iso .modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.bootstrap-iso .modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.bootstrap-iso .modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.bootstrap-iso .modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.bootstrap-iso .modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .bootstrap-iso .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .bootstrap-iso .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .bootstrap-iso .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .bootstrap-iso .modal-lg {
    width: 900px;
  }
}
.bootstrap-iso .tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  visibility: visible;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: normal;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
}
.bootstrap-iso .tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.bootstrap-iso .tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.bootstrap-iso .tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.bootstrap-iso .tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.bootstrap-iso .tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.bootstrap-iso .tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  background-color: #000000;
  border-radius: 4px;
}
.bootstrap-iso .tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.bootstrap-iso .tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.bootstrap-iso .tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.bootstrap-iso .tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.bootstrap-iso .tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000000;
}
.bootstrap-iso .tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000000;
}
.bootstrap-iso .tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.bootstrap-iso .tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.bootstrap-iso .tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.bootstrap-iso .popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 18px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  white-space: normal;
}
.bootstrap-iso .popover.top {
  margin-top: -10px;
}
.bootstrap-iso .popover.right {
  margin-left: 10px;
}
.bootstrap-iso .popover.bottom {
  margin-top: 10px;
}
.bootstrap-iso .popover.left {
  margin-left: -10px;
}
.bootstrap-iso .popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.bootstrap-iso .popover-content {
  padding: 9px 14px;
}
.bootstrap-iso .popover > .arrow,
.bootstrap-iso .popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.bootstrap-iso .popover > .arrow {
  border-width: 11px;
}
.bootstrap-iso .popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.bootstrap-iso .popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.bootstrap-iso .popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #ffffff;
}
.bootstrap-iso .popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bootstrap-iso .popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #ffffff;
}
.bootstrap-iso .popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.bootstrap-iso .popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #ffffff;
}
.bootstrap-iso .popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bootstrap-iso .popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #ffffff;
  bottom: -10px;
}
.bootstrap-iso .carousel {
  position: relative;
}
.bootstrap-iso .carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.bootstrap-iso .carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.bootstrap-iso .carousel-inner > .item > img,
.bootstrap-iso .carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .bootstrap-iso .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -moz-transition: -moz-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000;
    -moz-perspective: 1000;
    perspective: 1000;
  }
  .bootstrap-iso .carousel-inner > .item.next,
  .bootstrap-iso .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .bootstrap-iso .carousel-inner > .item.prev,
  .bootstrap-iso .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .bootstrap-iso .carousel-inner > .item.next.left,
  .bootstrap-iso .carousel-inner > .item.prev.right,
  .bootstrap-iso .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.bootstrap-iso .carousel-inner > .active,
.bootstrap-iso .carousel-inner > .next,
.bootstrap-iso .carousel-inner > .prev {
  display: block;
}
.bootstrap-iso .carousel-inner > .active {
  left: 0;
}
.bootstrap-iso .carousel-inner > .next,
.bootstrap-iso .carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.bootstrap-iso .carousel-inner > .next {
  left: 100%;
}
.bootstrap-iso .carousel-inner > .prev {
  left: -100%;
}
.bootstrap-iso .carousel-inner > .next.left,
.bootstrap-iso .carousel-inner > .prev.right {
  left: 0;
}
.bootstrap-iso .carousel-inner > .active.left {
  left: -100%;
}
.bootstrap-iso .carousel-inner > .active.right {
  left: 100%;
}
.bootstrap-iso .carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.bootstrap-iso .carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.bootstrap-iso .carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.bootstrap-iso .carousel-control:hover,
.bootstrap-iso .carousel-control:focus {
  outline: 0;
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.bootstrap-iso .carousel-control .icon-prev,
.bootstrap-iso .carousel-control .icon-next,
.bootstrap-iso .carousel-control .glyphicon-chevron-left,
.bootstrap-iso .carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.bootstrap-iso .carousel-control .icon-prev,
.bootstrap-iso .carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.bootstrap-iso .carousel-control .icon-next,
.bootstrap-iso .carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.bootstrap-iso .carousel-control .icon-prev,
.bootstrap-iso .carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  line-height: 1;
  font-family: serif;
}
.bootstrap-iso .carousel-control .icon-prev:before {
  content: '\2039';
}
.bootstrap-iso .carousel-control .icon-next:before {
  content: '\203a';
}
.bootstrap-iso .carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.bootstrap-iso .carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #ffffff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.bootstrap-iso .carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #ffffff;
}
.bootstrap-iso .carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.bootstrap-iso .carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .bootstrap-iso .carousel-control .glyphicon-chevron-left,
  .bootstrap-iso .carousel-control .glyphicon-chevron-right,
  .bootstrap-iso .carousel-control .icon-prev,
  .bootstrap-iso .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px;
  }
  .bootstrap-iso .carousel-control .glyphicon-chevron-left,
  .bootstrap-iso .carousel-control .icon-prev {
    margin-left: -15px;
  }
  .bootstrap-iso .carousel-control .glyphicon-chevron-right,
  .bootstrap-iso .carousel-control .icon-next {
    margin-right: -15px;
  }
  .bootstrap-iso .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .bootstrap-iso .carousel-indicators {
    bottom: 20px;
  }
}
.bootstrap-iso .clearfix:before,
.bootstrap-iso .clearfix:after,
.bootstrap-iso .dl-horizontal dd:before,
.bootstrap-iso .dl-horizontal dd:after,
.bootstrap-iso .container:before,
.bootstrap-iso .container:after,
.bootstrap-iso .container-fluid:before,
.bootstrap-iso .container-fluid:after,
.bootstrap-iso .row:before,
.bootstrap-iso .row:after,
.bootstrap-iso .form-horizontal .form-group:before,
.bootstrap-iso .form-horizontal .form-group:after,
.bootstrap-iso .btn-toolbar:before,
.bootstrap-iso .btn-toolbar:after,
.bootstrap-iso .btn-group-vertical > .btn-group:before,
.bootstrap-iso .btn-group-vertical > .btn-group:after,
.bootstrap-iso .nav:before,
.bootstrap-iso .nav:after,
.bootstrap-iso .navbar:before,
.bootstrap-iso .navbar:after,
.bootstrap-iso .navbar-header:before,
.bootstrap-iso .navbar-header:after,
.bootstrap-iso .navbar-collapse:before,
.bootstrap-iso .navbar-collapse:after,
.bootstrap-iso .pager:before,
.bootstrap-iso .pager:after,
.bootstrap-iso .panel-body:before,
.bootstrap-iso .panel-body:after,
.bootstrap-iso .modal-footer:before,
.bootstrap-iso .modal-footer:after {
  content: " ";
  display: table;
}
.bootstrap-iso .clearfix:after,
.bootstrap-iso .dl-horizontal dd:after,
.bootstrap-iso .container:after,
.bootstrap-iso .container-fluid:after,
.bootstrap-iso .row:after,
.bootstrap-iso .form-horizontal .form-group:after,
.bootstrap-iso .btn-toolbar:after,
.bootstrap-iso .btn-group-vertical > .btn-group:after,
.bootstrap-iso .nav:after,
.bootstrap-iso .navbar:after,
.bootstrap-iso .navbar-header:after,
.bootstrap-iso .navbar-collapse:after,
.bootstrap-iso .pager:after,
.bootstrap-iso .panel-body:after,
.bootstrap-iso .modal-footer:after {
  clear: both;
}
.bootstrap-iso .center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.bootstrap-iso .pull-right {
  float: right !important;
}
.bootstrap-iso .pull-left {
  float: left !important;
}
.bootstrap-iso .hide {
  display: none !important;
}
.bootstrap-iso .show {
  display: block !important;
}
.bootstrap-iso .invisible {
  visibility: hidden;
}
.bootstrap-iso .text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.bootstrap-iso .hidden {
  display: none !important;
  visibility: hidden !important;
}
.bootstrap-iso .affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.bootstrap-iso .visible-xs,
.bootstrap-iso .visible-sm,
.bootstrap-iso .visible-md,
.bootstrap-iso .visible-lg {
  display: none !important;
}
.bootstrap-iso .visible-xs-block,
.bootstrap-iso .visible-xs-inline,
.bootstrap-iso .visible-xs-inline-block,
.bootstrap-iso .visible-sm-block,
.bootstrap-iso .visible-sm-inline,
.bootstrap-iso .visible-sm-inline-block,
.bootstrap-iso .visible-md-block,
.bootstrap-iso .visible-md-inline,
.bootstrap-iso .visible-md-inline-block,
.bootstrap-iso .visible-lg-block,
.bootstrap-iso .visible-lg-inline,
.bootstrap-iso .visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .bootstrap-iso .visible-xs {
    display: block !important;
  }
  .bootstrap-iso table.visible-xs {
    display: table;
  }
  .bootstrap-iso tr.visible-xs {
    display: table-row !important;
  }
  .bootstrap-iso th.visible-xs,
  .bootstrap-iso td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-iso .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-iso .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-iso .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-iso .visible-sm {
    display: block !important;
  }
  .bootstrap-iso table.visible-sm {
    display: table;
  }
  .bootstrap-iso tr.visible-sm {
    display: table-row !important;
  }
  .bootstrap-iso th.visible-sm,
  .bootstrap-iso td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-iso .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-iso .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-iso .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-iso .visible-md {
    display: block !important;
  }
  .bootstrap-iso table.visible-md {
    display: table;
  }
  .bootstrap-iso tr.visible-md {
    display: table-row !important;
  }
  .bootstrap-iso th.visible-md,
  .bootstrap-iso td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-iso .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-iso .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-iso .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .visible-lg {
    display: block !important;
  }
  .bootstrap-iso table.visible-lg {
    display: table;
  }
  .bootstrap-iso tr.visible-lg {
    display: table-row !important;
  }
  .bootstrap-iso th.visible-lg,
  .bootstrap-iso td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-iso .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-iso .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-iso .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-iso .hidden-lg {
    display: none !important;
  }
}
.bootstrap-iso .visible-print {
  display: none !important;
}
@media print {
  .bootstrap-iso .visible-print {
    display: block !important;
  }
  .bootstrap-iso table.visible-print {
    display: table;
  }
  .bootstrap-iso tr.visible-print {
    display: table-row !important;
  }
  .bootstrap-iso th.visible-print,
  .bootstrap-iso td.visible-print {
    display: table-cell !important;
  }
}
.bootstrap-iso .visible-print-block {
  display: none !important;
}
@media print {
  .bootstrap-iso .visible-print-block {
    display: block !important;
  }
}
.bootstrap-iso .visible-print-inline {
  display: none !important;
}
@media print {
  .bootstrap-iso .visible-print-inline {
    display: inline !important;
  }
}
.bootstrap-iso .visible-print-inline-block {
  display: none !important;
}
@media print {
  .bootstrap-iso .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .bootstrap-iso .hidden-print {
    display: none !important;
  }
}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TravelVilla - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-image: url(Beautiful_Mountain_Hill_Nature_HD_Wallpaper.jpg); background-repeat: ; background-position: center;">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Travel</span>Villa</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
<?php
include "connection.php";
$id=$_SESSION['id'];
$sql = "SELECT COUNT(*) AS `id`FROM `userprofile` WHERE `userprofile`.`cid`= '$id'";		
$res= mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res)){
?>
						<em class="glyphicon glyphicon-bell"></em><span class="label label-danger">
						<?php echo $row['id']; ?>
						</span>
						
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right"></small>
										<a href="bookinglist.php"><strong><?php echo $_SESSION['name']?></strong> has  <strong>&nbsp;<?php echo $row['id']; ?></strong> &nbsp; new bookings</a>
									<br />
								</div>
							</li>
<?php
}
?>							
							
								<div class="all-button"><a href="bookinglist.php">
									<em class="fa fa-inbox"></em> <strong>See all bookingss</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="settings.php">
						<em class="	glyphicon glyphicon-cog"></em><span class="label label-info"></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="settings.php">
								<div><em class="	glyphicon glyphicon-wrench	"></em> General Settings
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<!--<li class="divider"></li>
							<li><a href="privacysettings.php">
								<div><em class="glyphicon glyphicon-alert"></em>Privacy Settings
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="settings.php">
								<div><em class="fa fa-edit"></em>Edit Profile
									<span class="pull-right text-muted small"></span></div>
							</a></li>-->
						</ul>
					</li>
				</ul>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['name']?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="userdashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Special Tours</a></li>
			<li class="active"><a href="booking.php"><em class="fa fa-plane">&nbsp;</em>Bookings</a></li>
			<li><a href="bookinglist.php"><em class="fa fa-file">&nbsp;</em> My Bookings</a></li>
			
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	
	
	<!--/.body-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="color: whitesmoke; text-align: center;"><b>Book Your Journey </b></h1>
			</div>
		</div>
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso18.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #0d0d0d; border-radius: 4px; padding-left:12px}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

<div class="bootstrap-iso" style="block-size: 800px; max-width: 900px;>
 <div class="container-fluid">
  <div class="row" style="
    width: 900px;
    height: 1000px;
    padding-top: 50px;
    padding-left: 100px;
    padding-right: 100px;
">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form  method="post" action="insert2.php" style="
    height: 1050px;
    width: 800px;
">

	 <div class="form-group ">
      <label class="control-label requiredField" for="id">
       Customer ID
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="uid" name="uid"  type="hidden"/><?php echo $_SESSION['id']?>
     </div>



     <div class="form-group ">
      <label class="control-label requiredField" for="date">
       Departure Date
       <span class="asteriskField">
        *
       </span>
      </label>
	  <br>
      <input class="" id="date" name="date1" size="50" placeholder="MM/DD/YYYY" type="date"/>
     </div>
        
     <div class="form-group ">    
     <label class="control-label requiredField" for="date">
       Arrival Date
       <span class="asteriskField">
        *
       </span>
      </label>
	  <br>
      <input class="" size="50" id="date" name="date2" placeholder="MM/DD/YYYY" type="date"/>
     </div>

     <div class="form-group ">
      <label class="control-label requiredField" for="tel">
       Contact Number +91
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control"  id="tel" name="tel" placeholder="Enter contact number" type="number"/>
     </div>

     <div class="form-group ">
      <label class="control-label " for="select">
       Select Your Trip-
      </label>
      <select class="select form-control" id="select" name="tripselect">
	   <option value="Select">
        -Select- 
       </option>
       <option value="Vaishnodevi-Dalhousie-Dharamsala-Kangra Valley">
        Vaishnodevi-Dalhousie-Dharamsala-Kangra Valley
       </option>
       <option value=" Bhutan &amp; Cooachbehar">
        Bhutan &amp; Cooachbehar
       </option>
       <option value="Kashmir">
        Kashmir
       </option>
       <option value="Leh Ladakh-Sumorire Lake With Kashmir &amp; Himachal Pradesh">
        Leh Ladakh-Sumorire Lake With Kashmir &amp; Himachal Pradesh
       </option>
       <option value=" Kinnor-Kailash">
        Kinnor-Kailash
       </option>
       <option value="Rajasthan-Jaisalmer-Bikaner">
        Rajasthan-Jaisalmer-Bikaner
       </option>
       <option value="Manali">
        Manali
       </option><option value=" Goa">
       Goa
       </option><option value=" Kashmir">
       Kashmir
       </option><option value=" Ooty">
        Ooty
       </option><option value="Kerala">
        Kerala
       </option><option value="ladakh">
        ladakh
       </option><option value=" Darjeeling">
        Darjeeling
       </option><option value="Shimla">
        Shimla
       </option><option value="Gangtok">
        Gangtok
       </option><option value="Varanasi">
        Varanasi
       </option><option value="Dwarka">
        Dwarka
       </option><option value="Somnath">
        Somnath
       </option><option value=" Ahmedabad">
        Ahmedabad
       </option><option value=" Madurai">
        Madurai
       </option><option value="Rameswaram">
        Rameswaram
       </option><option value="Trirupati">
        Trirupati
       </option><option value="Bodh Gaya">
        Bodh Gaya
       </option><option value="Haridwar">
        Haridwar
       </option><option value="Havelock Beach">
       Havelock Beach
       </option><option value="Port Blair Beach">
		Port Blair Beach
       </option> </option><option value="Goa Beach">
		Goa Beach
       </option> </option><option value="Bentota Beach">
		Bentota Beach
       </option> </option><option value="Krabi Beach">
		Krabi Beach
       </option>
      </select>
     </div>

     <div class="form-group ">
      <label class="control-label ">
       Are you travelling for work
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="radio" type="radio" value="Yes"/>
         Yes
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="radio" type="radio" value="No"/>
         No
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="number">
       Number of travellers
      </label>
	  <br>
      <b>Adult:</b> <input class="" id="number" size="50" name="adult" type="number" required/>
	  <b>Child:</b> <input class="" id="number" size="50" name="child" type="number" required/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-warning " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
	<!--/.body End-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
<?php
}
else
{
	header ("location:index.php");
}
?>