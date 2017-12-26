@extends('layouts.profile', ['id' => 'profile-onboard-view-template', 'view' => 'onboard'])

@section('title', 'Pick your fanbases')

@section('content')
    <div>
        @include('profile.nav', ['action' => 'Choose your fanbases', 'step' => $titles[$route]['step']])
        <div class="_2v7K_">
            <h2 class="_3YXPS" style="opacity: 1; transform: translateX(0px) translateZ(0px);">
                {{ $titles[$route]['h2'] }}
            </h2>
            <div class="_26n6g" style="opacity: 1; transform: translateX(0px) translateZ(0px);">
                <h3 class="_1ksgx">{{ $titles[$route]['h3'] }}</h3>
                <label class="_1W5GP">
                    <span class="xn0aB"> Join all </span>
                    <span class="_2nEcT" data-bind="click: selectAll, css: { _393Hg: selectedAll }">
                        <svg width="12" height="9" viewBox="0 0 12 9" class="_2J7XM _3Qj_S hS_z1"><path fill="#fff" fill-rule="evenodd" d="M9.4 1L11 2.6 4.87 8.73 1 4.86l1.6-1.59 2.27 2.27z"></path></svg>
                        <input type="checkbox" value="on">
                    </span>
                </label>
            </div>
            <div class="_1C4lW" data-bind="foreach: fanbases, visible: fanbases().length > 0">
                <div class="_1mWot _27PIS _1wMrt PTpci" style="opacity: 1; transform: translateX(0px) translateZ(0px);">
                    <div class="ZD12l _1iE2V">
                        <div class="_1KG3g">
                            <div class="gzgzI" data-bind="text: stamp"></div>
                        </div>
                        <div class="_2lssz">
                            <div class="_38L6D" style="padding-bottom: 100%;">
                                <img class="_214e9 b00q8" data-bind="attr: { srcset: resized }" src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%201%201%27%2F%3E" sizes="(min-width: 768px) 555px, (max-width: 767px) 400px, 300px">
                            </div>
                        </div>
                    </div>
                    <div class="_1KQuz">
                        <h3 class="_2o06m _1oBl0">
                            <span class="_1QEWe">
                                <span data-bind="text: name"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none" fill-rule="evenodd"><path fill="rgba(32, 198, 89, 1)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                            </span>
                        </h3>
                        <p class="_12Iv2 _1oBl0" data-bind="text: description"></p>
                        <div class="_1TvPX">
                            <div class="_1Ct87">
                                <span>
                                    <span class="CrE3q">{{ rand(1, 88) }}K</span>
                                    <span> dribbles</span>
                                </span>
                            </div>
                            <button class="CmDVS safUy _1geYT" data-bind="click: selectOne, css: { oFTqy: selected.indexOf(id) > -1 }">
                                <span data-bind="if: selected.indexOf(id) == -1">join</span>
                                <span data-bind="if: selected.indexOf(id) > -1">joined</span>
                                <svg width="12" height="9" viewBox="0 0 12 9" class="_2J7XM _21G_8" data-bind="css: { hS_z1: selected.indexOf(id) > -1 }">
                                    <path fill="#fff" fill-rule="evenodd" d="M9.4 1L11 2.6 4.87 8.73 1 4.86l1.6-1.59 2.27 2.27z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_2nhzB">
            <div class="_150WJ">
                {!! Form::open(['route' => 'onboard.store', 'role' => 'form', 'method' => 'POST', 'data-bind' => 'submit: submit'] ) !!}
                    <input name="route" type="hidden" value="{{ $route }}" />
                    <div data-bind="foreach: selected">
                        <input name="fanbases[]" type="hidden" data-bind="value: $data" />
                    </div>
                <div>
                    <a href="/profile/create" class="_3UGMt">Back</a>
                    <button type="submit" class="ABMrE _1MC-v _1h78h">Next</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
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

            ko.applyBindings(FanbaseListViewModel, document.getElementById('profile-onboard-view-template'));
        });

    </script>
@endsection