
<header class="_3XXLi">
    <nav class="R1XAV" id="header">
        <div class="_2H55B">
            <a class="" href="/">
                <img class="_3YKuQ" src="/images/logo.png" alt="AltFootball">
            </a>
            <form class="ra77F" action="">
                <div class="_1YqNB _1eF7g _3TYH2">
                    <input type="search" value=""
                           placeholder="Search AltFootball"
                           class="_3vbhf l4oHd"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="42"
                         viewBox="0 0 40 42" class="_2-OFE _1_FTk _3ZPAz">
                        <path fill="#00AFFF" fill-rule="evenodd"
                              d="M34.2 37.01l-7.96-7.88c.56-.43 1.1-.89 1.6-1.4l.14-.15 7.87 7.78-1.64 1.65zM7.25 25.4a12.76 12.76 0 0 1-3.8-9.06 12.75 12.75 0 0 1 3.71-9.1 12.77 12.77 0 0 1 9.07-3.8h.06c3.4 0 6.62 1.32 9.04 3.72a12.76 12.76 0 0 1 3.8 9.06A12.86 12.86 0 0 1 7.24 25.4zm32.25 8.73l-9.39-9.28a16.14 16.14 0 0 0 2.45-8.64 16.17 16.17 0 0 0-4.81-11.5A16.17 16.17 0 0 0 16.28 0h-.07A16.17 16.17 0 0 0 4.7 4.82 16.17 16.17 0 0 0 0 16.35a16.18 16.18 0 0 0 4.82 11.5 16.18 16.18 0 0 0 11.46 4.7h.07A16.2 16.2 0 0 0 23.23 31L33 40.66a1.71 1.71 0 0 0 2.43-.01l4.06-4.1a1.72 1.72 0 0 0-.01-2.42z"
                        ></path>
                    </svg>
                </div>
                <button type="reset" class="_1C5MC">Cancel</button>
            </form>
        </div>
        <div class="_3BBJg">
            <a class="_13sKJ" href="/fanbases">FANBASES</a>
            @if(Auth::guard()->check() && Auth::user()->is_active)
                <?php $user = Auth::user() ?>
                <button class="_13sKJ">
                    <span class="T3zZE">Alerts</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" class="_8e7Ip">
                        <g fill="none" fill-rule="evenodd" stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-width="1.5" d="M13.85 9.37v2.26l1 2.34H.75l.97-2.37V6.81a6.06 6.06 0 0 1 12.13 0v2.56z"></path>
                            <path d="M10.76 14.3L7.8 17.25l-2.94-2.94"></path>
                        </g>
                    </svg>
                </button>
                <a class="_3KPPV" href="/u/{{ $user->slug }}">
                    <div class="_1Bm3M">{{ $user->name }}</div>
                    <div class="_25jNX X4CNn">
                        <div class="N3r_f">
                            <div class="_38L6D" style="padding-bottom: 100%;">
                                <img alt="" role="presentation" src="{{ $user->thumb_x }}" class="_214e9 b00q8" width="60" height="60">
                            </div>
                        </div>
                    </div>
                </a>
            @else
                <button class="BJ1bO" data-bind="click: openJoinForm">Sign in</button>
                <button class="_6UUFH" data-bind="click: openJoinForm">Join</button>
            @endif
        </div>
    </nav>
    <div class="_3GUPV -hkpO">
        <div class="_2Ruh1"style="opacity: 0; transform: translateY(-75px) translateZ(-40px);">
            <nav class="_3GkHt _3AKLf">
                <button class="zxDoM undefined"><!-- react-text: 32 -->Activity
                    <!-- /react-text --><!-- react-empty: 33 --></button>
                <button class="_3UwsA zxDoM"><!-- react-text: 35 -->Invites
                    <!-- /react-text --><!-- react-empty: 36 --></button>
            </nav>
            <div class="_1ese_">
                <div>
                    <ul class="_3XxoM"></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="_BrFp"></div>
</header>