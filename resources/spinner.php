<div class="vjs-loading-spinner" dir="ltr"></div>
<style>
    .vjs-loading-spinner {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -25px 0 0 -25px;
        opacity: 0.85;
        text-align: left;
        border: 6px solid rgba(43, 51, 63, 0.7);
        box-sizing: border-box;
        background-clip: padding-box;
        width: 50px;
        height: 50px;
        border-radius: 25px;
    }

    .vjs-seeking .vjs-loading-spinner,
    .vjs-waiting .vjs-loading-spinner {
        display: block;
    }

    .vjs-loading-spinner:before,
    .vjs-loading-spinner:after {
        content: "";
        position: absolute;
        margin: -6px;
        box-sizing: inherit;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        opacity: 1;
        border: inherit;
        border-color: transparent;
        border-top-color: white;
    }

    .vjs-seeking .vjs-loading-spinner:before,
    .vjs-seeking .vjs-loading-spinner:after,
    .vjs-waiting .vjs-loading-spinner:before,
    .vjs-waiting .vjs-loading-spinner:after {
        -webkit-animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
        animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
    }

    .vjs-seeking .vjs-loading-spinner:before,
    .vjs-waiting .vjs-loading-spinner:before {
        border-top-color: white;
    }

    .vjs-seeking .vjs-loading-spinner:after,
    .vjs-waiting .vjs-loading-spinner:after {
        border-top-color: white;
        -webkit-animation-delay: 0.44s;
        animation-delay: 0.44s;
    }

    @keyframes vjs-spinner-spin {
        100% {
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes vjs-spinner-spin {
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes vjs-spinner-fade {
        0% {
            border-top-color: #73859f;
        }
        20% {
            border-top-color: #73859f;
        }
        35% {
            border-top-color: white;
        }
        60% {
            border-top-color: #73859f;
        }
        100% {
            border-top-color: #73859f;
        }
    }

    @-webkit-keyframes vjs-spinner-fade {
        0% {
            border-top-color: #73859f;
        }
        20% {
            border-top-color: #73859f;
        }
        35% {
            border-top-color: white;
        }
        60% {
            border-top-color: #73859f;
        }
        100% {
            border-top-color: #73859f;
        }
    }
</style>