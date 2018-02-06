<header class="_3XXLi">
    <nav class="R1XAV jMZSBo" id="header">
        <div class="sc-kAzzGY fVSfy">
            <div class="sc-ckVGcZ bUebbF">
                <a class="sc-brqgnP hBQeWD" href="/fanbases">Fanbases</a>
            </div>
        </div>
        <div class="fields" data-bind="foreach: [<?php echo implode(',', range(1, 3)); ?>]">
            <div class="shape rect"></div>
        </div>
        <div class="_2H55B">
            <a class="sc-kgoBCf jHUdQQ" href="/">
                <div class="logo">
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="square" viewBox="0 0 26 26" version="1.1" width="44px" height="44px">
                            <g id="surface1">
                                <path style="fill: rgba(32, 198, 89, 1);" d="M 21.125 2 L 4.875 2 C 2.183594 2 0 4.183594 0 6.875 L 0 19.125 C 0 21.816406 2.183594 24 4.875 24 L 21.125 24 C 23.816406 24 26 21.816406 26 19.125 L 26 6.875 C 26 4.183594 23.816406 2 21.125 2 Z "/>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ball" viewBox="0 0 50 50" version="1.1" width="44px" height="44px">
                            <g id="surface1">
                                <path style="fill: #FFFFFF;" d="M 24.714844 2 C 22.449219 2.023438 20.15625 2.390625 17.890625 3.125 C 5.824219 7.046875 -0.796875 20.039063 3.125 32.109375 C 7.046875 44.175781 20.039063 50.796875 32.109375 46.875 C 44.117188 42.972656 50.710938 30.089844 46.914063 18.074219 C 46.90625 18.011719 46.894531 17.949219 46.875 17.890625 C 43.933594 8.839844 35.890625 2.855469 26.960938 2.082031 C 26.21875 2.019531 25.46875 1.988281 24.714844 2 Z M 19.6875 4.6875 L 24.027344 7.390625 L 24.027344 15.707031 L 16.53125 21.152344 C 16.511719 21.140625 16.492188 21.136719 16.46875 21.128906 L 8.539063 18.578125 L 7.320313 13.664063 C 9.847656 9.71875 13.703125 6.589844 18.511719 5.027344 C 18.902344 4.898438 19.292969 4.789063 19.6875 4.6875 Z M 30.308594 4.6875 C 35.339844 6.003906 39.800781 9.167969 42.679688 13.660156 L 41.449219 18.625 L 33.46875 21.152344 L 26.027344 15.746094 L 26.027344 7.359375 Z M 7.949219 20.488281 L 15.859375 23.03125 C 15.878906 23.039063 15.898438 23.046875 15.921875 23.050781 L 18.769531 31.828125 L 13.800781 38.667969 L 8.757813 38.3125 C 7.144531 36.34375 5.859375 34.054688 5.027344 31.488281 C 4.195313 28.921875 3.886719 26.316406 4.03125 23.78125 Z M 42.089844 20.515625 L 45.96875 23.78125 C 46.285156 29.113281 44.527344 34.289063 41.230469 38.3125 L 36.144531 38.671875 L 31.234375 31.816406 L 34.078125 23.054688 Z M 20.390625 33 L 29.621094 33 L 34.542969 39.871094 L 32.640625 44.558594 C 32.265625 44.707031 31.882813 44.84375 31.488281 44.972656 C 26.679688 46.535156 21.722656 46.269531 17.359375 44.5625 L 15.4375 39.816406 Z "/>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="bubble" viewBox="0 0 24 24" version="1.1" width="44" height="44">
                            <g fill="#FFF" fill-rule="evenodd">
                                <path d="M16 13.33H5.2a.76.76 0 0 0-.4.11l-3.3 1.99V1.5H16v11.83zM16.75 0h-16A.75.75 0 0 0 0 .75v16a.75.75 0 0 0 1.14.64l4.26-2.56h11.35c.41 0 .75-.33.75-.75V.75a.75.75 0 0 0-.75-.75z"></path>
                                <path d="M4.75 6.48h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1m0 3h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="words">
                        <span class="dOqZCB two">FOOTBALL</span>
                    </div>
                </div>
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
                        <g fill="none" fill-rule="evenodd" stroke="rgba(17, 102, 146, 0.85)" stroke-linecap="round"
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