<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 15:51:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KMPAMC</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

    <link rel="stylesheet"
        href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min2167.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

    <script nonce="053fe01d-1922-40a6-a796-6ebb6cab4483">
    try {
        (function(w, d) {
            ! function(bu, bv, bw, bx) {
                bu[bw] = bu[bw] || {};
                bu[bw].executed = [];
                bu.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bu.zaraz.q = [];
                bu.zaraz._f = function(by) {
                    return async function() {
                        var bz = Array.prototype.slice.call(arguments);
                        bu.zaraz.q.push({
                            m: by,
                            a: bz
                        })
                    }
                };
                for (const bA of ["track", "set", "debug"]) bu.zaraz[bA] = bu.zaraz._f(bA);
                bu.zaraz.init = () => {
                    var bB = bv.getElementsByTagName(bx)[0],
                        bC = bv.createElement(bx),
                        bD = bv.getElementsByTagName("title")[0];
                    bD && (bu[bw].t = bv.getElementsByTagName("title")[0].text);
                    bu[bw].x = Math.random();
                    bu[bw].w = bu.screen.width;
                    bu[bw].h = bu.screen.height;
                    bu[bw].j = bu.innerHeight;
                    bu[bw].e = bu.innerWidth;
                    bu[bw].l = bu.location.href;
                    bu[bw].r = bv.referrer;
                    bu[bw].k = bu.screen.colorDepth;
                    bu[bw].n = bv.characterSet;
                    bu[bw].o = (new Date).getTimezoneOffset();
                    if (bu.dataLayer)
                        for (const bH of Object.entries(Object.entries(dataLayer).reduce(((bI, bJ) => ({
                                ...bI[1],
                                ...bJ[1]
                            })), {}))) zaraz.set(bH[0], bH[1], {
                            scope: "page"
                        });
                    bu[bw].q = [];
                    for (; bu.zaraz.q.length;) {
                        const bK = bu.zaraz.q.shift();
                        bu[bw].q.push(bK)
                    }
                    bC.defer = !0;
                    for (const bL of [localStorage, sessionStorage]) Object.keys(bL || {}).filter((bN => bN
                        .startsWith("_zaraz_"))).forEach((bM => {
                        try {
                            bu[bw]["z_" + bM.slice(7)] = JSON.parse(bL.getItem(bM))
                        } catch {
                            bu[bw]["z_" + bM.slice(7)] = bL.getItem(bM)
                        }
                    }));
                    bC.referrerPolicy = "origin";
                    bC.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bu[
                        bw])));
                    bB.parentNode.insertBefore(bC, bB)
                };
                ["complete", "interactive"].includes(bv.readyState) ? zaraz.init() : bu.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document)
    } catch (e) {
        throw fetch("/cdn-cgi/zaraz/t"), e;
    };
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item ">
                    <a href="{{route('signout')}}" class="nav-link"><i class="fa fa-sign-out" style="color:blue;" aria-hidden="true"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>

            </ul>
        </nav>