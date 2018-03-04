@extends('layouts.app')

@section('meta')
    @include('includes.meta', $meta)
@endsection

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
                                    <div class="owl-carousel owl-three owl-theme">
                                        @foreach($fanbases as $k => $fanbase)
                                            <a class="_12L63 _1qe7q" href="/f/{{ $fanbase->slug }}">
                                                <div class="_3ta8l">
                                                    <div class="">
                                                        <div class="_38L6D" style="padding-bottom: 100%;">
                                                            <img alt="" role="presentation" src="{{ $fanbase->big_x }}" class="_214e9 b00q8" width="200" height="200">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_2iRjb">
                                                    <div class="_3hQ2Q">{{ str_pad(++$k, 2, 0, STR_PAD_LEFT) }}</div>
                                                    <h3 class="_2BMyH">
                                                        {{ $fanbase->name }}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18" class="_1z7Hy _1ORHw"><g fill="none" fill-rule="evenodd"><path fill="rgba(21,205,114, 0.95)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                                                    </h3>
                                                    <p class="_1gZlE">{{ $fanbase->description }}</p>
                                                </div>
                                                <div class="_3DEPd _2oYlQ">
                                                    <span class="_3es_m _2e1-n _1geYT">View Tribe</span>
                                                    <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join', active_text: 'Joined', class: 'items'"></follow>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
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
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($fanbases as $k => $fanbase)
                                        <a class="_12L63 undefined" href="/f/{{ $fanbase->slug }}">
                                            <div class="_3ta8l">
                                                <div class="">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        <img alt="" role="presentation" src="{{ $fanbase->small_x }}" class="_214e9 b00q8" width="200" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2iRjb">
                                                <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                                <p class="_1gZlE">{{ $fanbase->description }}</p>
                                            </div>
                                            <div class="_3DEPd">
                                                <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join', active_text: 'Joined', class: 'items'"></follow>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
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
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($fanbases as $k => $fanbase)
                                        <a class="_12L63 undefined" href="/f/{{ $fanbase->slug }}">
                                            <div class="_3ta8l">
                                                <div class="">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        <img alt="" role="presentation" src="{{ $fanbase->small_x }}" class="_214e9 b00q8" width="200" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2iRjb">
                                                <h3 class="_2BMyH">
                                                    {{ $fanbase->name }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18" class="_1z7Hy _1ORHw"><g fill="none" fill-rule="evenodd"><path fill="rgba(21,205,114, 0.95)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                                                </h3>
                                                <p class="_1gZlE">{{ $fanbase->description }}</p>
                                            </div>
                                            <div class="_3DEPd">
                                                <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join', active_text: 'Joined', class: 'items'"></follow>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
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
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($fanbases as $k => $fanbase)
                                            <a class="_12L63 undefined" href="/f/{{ $fanbase->slug }}">
                                                <div class="_3ta8l">
                                                    <div class="">
                                                        <div class="_38L6D" style="padding-bottom: 100%;">
                                                            <img alt="" role="presentation" src="{{ $fanbase->small_x }}" class="_214e9 b00q8" width="200" height="200">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_2iRjb">
                                                    <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                                    <p class="_1gZlE">{{ $fanbase->description  }}</p>
                                                </div>
                                                <div class="_3DEPd">
                                                    <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join', active_text: 'Joined', class: 'items'"></follow>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
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
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($fanbases as $k => $fanbase)
                                        <a class="_12L63 undefined" href="/f/{{ $fanbase->slug }}">
                                            <div class="_3ta8l">
                                                <div class="">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        <img alt="" role="presentation" src="{{ $fanbase->small_x }}" class="_214e9 b00q8" width="200" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2iRjb">
                                                <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                                <p class="_1gZlE">{{ $fanbase->description  }}</p>
                                            </div>
                                            <div class="_3DEPd">
                                                <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join', active_text: 'Joined', class: 'items'"></follow>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
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
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($fanbases as $k => $fanbase)
                                        <a class="_12L63 undefined" href="/f/{{ $fanbase->slug }}">
                                            <div class="_3ta8l">
                                                <div class="">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        <img alt="" role="presentation" src="{{ $fanbase->small_x }}" class="_214e9 b00q8" width="200" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2iRjb">
                                                <h3 class="_2BMyH">{{ $fanbase->name }}</h3>
                                                <p class="_1gZlE">{{ $fanbase->description }}</p>
                                            </div>
                                            <div class="_3DEPd">
                                                <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join', active_text: 'Joined', class: 'items'"></follow>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('templates.follow')
@endsection

@section('js')
    <script type="text/javascript">
        $(function() {
            function Fanbase(data) {
                this.id = ko.observable(data.id);
            }

            function FanbaseListViewModel() {
                var data = {!! $fanbases->toJson() !!};

                var self = this;
                self.data = ko.observableArray(data);
                self.selected = ko.observableArray([]);
                self.fanbases = ko.computed(function() {
                    var array = ko.observableArray([]);

                    return ko.utils.arrayFilter(self.data(), function(fanbase) {
                        array.push(new Fanbase(fanbase));
                        return true;
                    });
                });
                self.openJoinForm = ko.observable(false);
                self.selectedAll = ko.observable(false);
                self.selectOne = function(fanbase) {
                    if(self.selected.indexOf(fanbase.id) > -1){
                        self.selected.remove(fanbase.id);
                    }
                    else{
                        self.selected.push(fanbase.id);
                    }
                };
                self.selectAll = function() {
                    if(self.selectedAll()){
                        ko.utils.arrayFilter(self.data(), function(fanbase) {
                            if(self.selected.indexOf(fanbase.id) > -1){
                                self.selected.remove(fanbase.id);
                            }
                            return true;
                        });
                        self.selectedAll(false);
                    }
                    else{
                        ko.utils.arrayFilter(self.data(), function(fanbase) {
                            self.selected.push(fanbase.id);
                            return true;
                        });
                        self.selectedAll(true);
                    }
                };
                self.submit = function(){
                    if(self.selected().length === 0){
                        self.openJoinForm(true);
                        return false;
                    }
                    return true;
                };
                self.ok = function(){
                    self.openJoinForm(false);
                }
            }
        });

    </script>
@endsection
