@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="">
        <div class="GKLAB">
            <!-- react-empty: 11491 -->
            <div class="_3WCIL">
                <nav class="_3GkHt _3UPVU">
                    <a class="_3UwsA zxDoM _2rvhv" href="/fanbases/your-fanbases">
                        Your Fanbases
                    </a>
                    <a class="zxDoM _2rvhv undefined" href="/fanbases">
                        Discover
                    </a>
                </nav>
            </div>
            <div class="_3UIm2">
                <div class="EjRC7"><a class="_2VZI8 _2e1-n _1geYT" href="/fanbases/category/0">See more</a>
                    <h2 class="_1ioC2">Fanbases we love</h2>
                    <div class="_2QjgM _3PqGG">
                        <div class="_3l_Es">
                            <div class="">
                                <div class="_2eSI4">
                                    @foreach($fanbases as $k => $fanbase)
                                        <a class="_12L63 _1qe7q" href="/fb/{{ $fanbase->slug }}">
                                            <div class="_3ta8l">
                                                <div class="">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        {!! $fanbase->getImage() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2iRjb">
                                                <div class="_3hQ2Q">{{ str_pad(++$k, 2, 0, STR_PAD_LEFT) }}</div>
                                                <h3 class="_2BMyH">
                                                    {{ $fanbase->name }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _1ORHw"><g fill="none" fill-rule="evenodd"><path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                                                </h3>
                                                <p class="_1gZlE">{{ $fanbase->description }}</p><span class="_3es_m _2e1-n _1geYT">View Tribe</span></div>
                                            <div class="_3DEPd _2oYlQ">
                                                <button class="zrN-a _2P1mw _1MC-v _1h78h">Join</button>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_36Qac">
                            <div class="_2BZH3">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_3UIm2">
                <div class="EjRC7"><a class="_2VZI8 _2e1-n _1geYT" href="/fanbases/category/1">See more</a>
                    <h2 class="_1ioC2">Trending</h2>
                    <div class="_2QjgM _3PqGG">
                        <div class="_3l_Es">
                            <div class="">
                                <div class="_2eSI4">
                                    @foreach($fanbases as $k => $fanbase)
                                    <a class="_12L63 undefined" href="/fb/{{ $fanbase->slug }}">
                                        <div class="_3ta8l">
                                            <div class="">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    {!! $fanbase->getImage() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2iRjb">
                                            <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                            <p class="_1gZlE">{{ $fanbase->description }}</p>
                                        </div>
                                        <div class="_3DEPd">
                                            <button class="zrN-a _2P1mw _1MC-v _1h78h">Join</button>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_36Qac">
                            <div class="_2BZH3">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_3UIm2">
                <div class="EjRC7">
                    <h2 class="_1ioC2">Recommended for you</h2>
                    <div class="_2QjgM _3PqGG">
                        <div class="_3l_Es">
                            <div class="">
                                <div class="_2eSI4">
                                    @foreach($fanbases as $k => $fanbase)
                                    <a class="_12L63 undefined" href="/fb/{{ $fanbase->slug }}">
                                        <div class="_3ta8l">
                                            <div class="">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    {!!  $fanbase->getImage() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2iRjb">
                                            <h3 class="_2BMyH">
                                                {{ $fanbase->name }}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _1ORHw"><g fill="none" fill-rule="evenodd"><path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                                            </h3>
                                            <p class="_1gZlE">{{ $fanbase->description }}</p>
                                        </div>
                                        <div class="_3DEPd">
                                            <button class="zrN-a _2P1mw _1MC-v _1h78h">Join</button>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_36Qac">
                            <div class="_2BZH3">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_3UIm2">
                <div class="EjRC7"><a class="_2VZI8 _2e1-n _1geYT" href="/fanbases/category/5">See more</a>
                    <h2 class="_1ioC2">Buzzing</h2>
                    <div class="_2QjgM _3PqGG">
                        <div class="_3l_Es">
                            <div class="">
                                <div class="_2eSI4">
                                    @foreach($fanbases as $k => $fanbase)
                                    <a class="_12L63 _1qe7q" href="/fb/{{ $fanbase->slug }}">
                                        <div class="_3ta8l">
                                            <div class="">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    {!! $fanbase->getImage() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2iRjb">
                                            <div class="_3hQ2Q">01</div>
                                            <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                            <p class="_1gZlE">{{ $fanbase->description }}</p>
                                            <span class="_3es_m _2e1-n _1geYT">View Tribe</span>
                                        </div>
                                        <div class="_3DEPd _2oYlQ">
                                            <button class="zrN-a _2P1mw _1MC-v _1h78h">Join</button>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_36Qac">
                            <div class="_2BZH3">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_3UIm2">
                <div class="EjRC7"><a class="_2VZI8 _2e1-n _1geYT" href="/fanbases/category/7">See more</a>
                    <h2 class="_1ioC2">New and interesting</h2>
                    <div class="_2QjgM _3PqGG">
                        <div class="_3l_Es">
                            <div class="">
                                <div class="_2eSI4">
                                    @foreach($fanbases as $k => $fanbase)
                                    <a class="_12L63 undefined" href="/t/bmw-sports-KurFstMwQ-y5t-tPNd2Y3A">
                                        <div class="_3ta8l">
                                            <div class="">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    {!! $fanbase->getImage() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2iRjb">
                                            <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                            <p class="_1gZlE">{{ $fanbase->description  }}</p>
                                        </div>
                                        <div class="_3DEPd">
                                            <button class="zrN-a _2P1mw _1MC-v _1h78h">Join</button>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_36Qac">
                            <div class="_2BZH3">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_3UIm2">
                <div class="EjRC7"><a class="_2VZI8 _2e1-n _1geYT" href="/fanbases/category/8">See more</a>
                    <h2 class="_1ioC2">Random</h2>
                    <div class="_2QjgM _3PqGG">
                        <div class="_3l_Es">
                            <div class="">
                                <div class="_2eSI4">
                                    @foreach($fanbases as $k => $fanbase)
                                    <a class="_12L63 undefined" href="/fb/{{ $fanbase->slug }}">
                                        <div class="_3ta8l">
                                            <div class="">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    {!! $fanbase->getImage() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2iRjb">
                                            <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                            <p class="_1gZlE">{{ $fanbase->description }}</p>
                                        </div>
                                        <div class="_3DEPd">
                                            <button class="zrN-a _2P1mw _1MC-v _1h78h">Join</button>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_36Qac">
                            <div class="_2BZH3">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
