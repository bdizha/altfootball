<header class="_3XXLi{{ !Auth::guard()->check() ? ' _FGT78' : '' }}">
    <nav class="R1XAV jMZSBo" id="header">
        <div class="sc-kAzzGY fVSfy">
            <div class="sc-ckVGcZ bUebbF">
                <a class="sc-brqgnP hBQeWD" href="/">
                    <div class="logo">
                        <div class="icons">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ball" viewBox="0 0 48 48" version="1.1" width="24px" height="24px">
                                <g id="surface1">
                                    <path style=" fill:#FFFFFF;" d="M 44 24 C 44 35.046875 35.046875 44 24 44 C 12.953125 44 4 35.046875 4 24 C 4 12.953125 12.953125 4 24 4 C 35.046875 4 44 12.953125 44 24 Z "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 16 21 L 10 19 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 24 9 L 24 15 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 19 30 L 15 36 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 33 36 L 29 30 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 38 19 L 29 22 "/>
                                    <path style=" fill:#35C733;" d="M 16 21 L 24 15 L 32 21 L 29 30 L 19 30 Z M 29.984375 4.9375 C 28.09375 4.335938 26.089844 4 24 4 C 21.910156 4 19.90625 4.335938 18.015625 4.9375 L 16.375 7.8125 L 24 10 L 31 8 Z M 42 26 L 44 24 C 44 19.03125 42.179688 14.496094 39.179688 11 L 37 11.3125 L 37 19.4375 Z M 32.1875 34.8125 L 27.9375 41.5625 L 30.21875 43.003906 C 34.699219 41.535156 38.472656 38.527344 40.933594 34.605469 L 40.125 31.75 Z M 11.0625 19.4375 L 11 11.3125 L 8.820313 11 C 5.820313 14.496094 4 19.03125 4 24 L 6 26 Z M 7.875 31.75 L 7.066406 34.605469 C 9.527344 38.527344 13.296875 41.535156 17.78125 43 L 19.9375 41.4375 L 15.8125 34.8125 Z "/>
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="bubble" viewBox="0 0 24 24" version="1.1" width="40" height="40">
                                <path fill="#35C733" d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
                                <path d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                        </div>
                        <div class="words">
                            <span class="dOqZCB two">FOOTBALL</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="fields" data-bind="foreach: [<?php echo implode(',', range(1, 3)); ?>]">
            <div class="shape rect"></div>
        </div>
        <div class="_2H55B">
            <a class="sc-kgoBCf jHUdQQ" href="/">

            </a>
            <div class="fields" data-bind="foreach: [<?php echo implode(',', range(1, 6)); ?>]">
                <div class="shape square"></div>
            </div>
        </div>
        <div class="_3BBJg">
            @if(Auth::guard()->check() && Auth::user()->is_active)
                <?php $user = Auth::user() ?>
                <button class="_13sKJ">
                    <span class="T3zZE">Alerts</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" class="_8e7Ip">
                        <g fill="none" fill-rule="evenodd" stroke="rgba(125, 160, 177, 0.65)" stroke-linecap="round"
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
                                     >
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