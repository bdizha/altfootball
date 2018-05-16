@extends('layouts.asset', ['id' => 'asset-show-view-template'])

@section('content')
    <?php $publishedAt = Carbon\Carbon::now()->subDays(47)->format('d M Y') ?>
    <h1 class="_3BaWr" data-reactid="69">{{ $user->name }}</h1>
    <div class="_344b1 _5X5FD">
        <h2 data-bind="css: { '_3h-Nf': selected() == 'one' }, click: select.bind($data, 'one')">
            Community Guidelines
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
            </svg>
        </h2>
        <div data-bind="css: { '_45-A3': selected() == 'one' }">
            <div class="_1Q_Pu">
                <h1 class="sc-lnrBVv lewgv">{{ $user->name }}</h1>
                <div class="sc-OxbzP huGLRC">
                    @if($user->bio)
                        <p class="_14d4a">{{ $user->bio }}</p>
                    @endif
                    @if($user->website)
                        <a rel="nofollow" target="_blank" class="_30-Mx"
                           href="{{ $user->website }}"></a>
                    @endif
                    @if(!empty($user->website))
                        <a rel="nofollow" target="_blank" class="Y5qEv"
                           href="{{ $user->website }}">{{ $user->getDomain() }}</a>
                    @endif
                </div>
                <div class="sc-bYnzgO lbyJvT">
                    <button class="sc-cPuPxo bxQWln sc-dphlzf cKoGdg" eventid="Click"
                            data-tracking="base - leave">Joined
                    </button>
                    <div class="sc-fvLVrH duDvju sc-fCPvlr hGwjDc"><span class="sc-gAmQfK hKaISF"><a
                                    class="" href="/u/{{ $user->slug }}/members"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                        viewBox="0 0 18 14" class="sc-cCVOAp eVkXGE"><path
                                            fill="rgba(125, 160, 177, 0.85)"
                                            fill-rule="evenodd"
                                            d="M6.7 1.5C8 1.5 9 2.5 9 4c0 1.3-1 2.4-2.3 2.4-1.4 0-2.5-1-2.5-2.4s1-2.5 2.5-2.5M9.2 7c1-.7 1.4-1.8 1.4-3 0-2.2-1.8-4-4-4-2 0-4 1.8-4 4 0 1.2.7 2.3 1.5 3-2 1-3.5 3-4 5.8 0 .4.2.8.6.8.4 0 .8-.2 1-.6.4-3 2.6-5 5-5 2.5 0 4.7 2 5.2 5 0 .4.4.7.8.7.5 0 .8-.5.7-1-.5-2.6-2-4.7-4-5.7m4.8 0c.6-.8 1-1.7 1-2.7 0-2.2-1.8-4-4-4-.5 0-.8.4-.8.8 0 .5.3 1 .8 1 1.3 0 2.4 1 2.4 2.3 0 1-.4 1.7-1.2 2.2-.4.2-.5.6-.3 1 .3.2.5.4.8.4 1.8.5 3.3 2.4 3.7 4.6 0 .4.4.6.7.6h.2c.4 0 .7-.4.6-.8C17.5 10 16 8 14.2 7"></path></svg>129.2K</a></span>
                        <span class="sc-gAmQfK ffPLas"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="18" height="15"
                                                            viewBox="0 0 18 15"
                                                            class="sc-cfWELz"><g fill="none"
                                                                                 fill-rule="evenodd"><path
                                            fill="#FFF"
                                            d="M11.31 7.16a2.4 2.4 0 1 1-4.78 0 2.4 2.4 0 0 1 4.78 0"></path><path
                                            fill="rgba(125, 160, 177, 0.85)"
                                            d="M8.92 5.27a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8m0 4.79a2.9 2.9 0 1 1 0-5.8 2.9 2.9 0 0 1 0 5.8"></path><path
                                            fill="rgba(125, 160, 177, 0.85)"
                                            d="M1.6 7.36c1.98 3.43 4.69 5.47 7.32 5.47s5.34-2.04 7.3-5.47c-2.08-3.68-4.8-5.86-7.3-5.86S3.7 3.68 1.6 7.36m7.3 6.97c-3.27 0-6.57-2.47-8.82-6.61A.75.75 0 0 1 .1 7c2.38-4.38 5.68-7 8.83-7 3.14 0 6.44 2.62 8.83 7 .12.23.12.5 0 .72-2.25 4.14-5.55 6.6-8.83 6.6"></path></g></svg>475.5K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection