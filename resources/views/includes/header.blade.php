<header class="_3XXLi">
    <nav class="R1XAV jMZSBo" id="header">
        <div class="sc-kAzzGY fVSfy">
            <div class="sc-ckVGcZ bUebbF">
                <a class="sc-brqgnP hBQeWD" href="/fanbases">Fanbases</a>
            </div>
        </div>
        <div class="_2H55B">
            <a class="sc-kgoBCf jHUdQQ" href="/">
                <span class="dOqZCB"><span style="color: #0095D0">Alt</span>Football</span>
            </a>
        </div>
        <div class="_3BBJg">
            @if(Auth::guard()->check() && Auth::user()->is_active)
                <?php $user = Auth::user() ?>
                <button class="_13sKJ">
                    <span class="T3zZE">Alerts</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" class="_8e7Ip">
                        <g fill="none" fill-rule="evenodd" stroke="#00AFFF" stroke-linecap="round"
                           stroke-linejoin="round">
                            <path stroke-width="1.5"
                                  d="M13.85 9.37v2.26l1 2.34H.75l.97-2.37V6.81a6.06 6.06 0 0 1 12.13 0v2.56z"></path>
                            <path d="M10.76 14.3L7.8 17.25l-2.94-2.94"></path>
                        </g>
                    </svg>
                </button>
                <a class="_3KPPV" href="/u/{{ $user->slug }}">
                    <div class="_1Bm3M">{{ $user->name }}</div>
                    <div class="_25jNX X4CNn">
                        <div class="N3r_f">
                            <div class="_38L6D" style="padding-bottom: 100%;">
                                <img alt="" role="presentation" src="{{ $user->thumb_x }}" class="_214e9 b00q8"
                                     width="60" height="60">
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
        <div class="_2Ruh1" style="opacity: 0; transform: translateY(-75px) translateZ(-40px);">
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