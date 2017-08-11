@extends('layouts.fan', ['view' => 'show', 'id' => 'fan-show-view-template'])

@section('title', $fan->name)

@section('content')
    <div class="" data-reactid="41">
        <div>
            <!-- react-empty: 4440 -->
            <div class="_2KNH4">
                <div class="_1jbho">
                    <div class="Cu7qw">
                        <div class="_1KeJ_">
                            <button class="_32k0z" data-bind="click: openSettingsPopup">
                                <div class="_13Js3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_13Js3">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#000"
                                                  d="M2.31 14.9l-1.03.63-.77 1.6.62.62 1.57-.8.38-.69 5.89-5.89-1.14-.99zM10.3 4.8L8.83 6.29l3.1 3.21 1.53-1.52 4.55-4.55L14.85.26 10.3 4.8zm0 1.8l4.26-4.26.43.44-4.26 4.26-.44-.43zm.99 1l4.26-4.26.44.43-4.27 4.27-.43-.44z"></path>
                                            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.5"
                                                  d="M14.75 16.51l-8.2-7.87-1.2-1.07A3.5 3.5 0 0 1 .85 3.43l1.97 1.9c1.61.04 2.4-.84 2.43-2.26L3.04.97A3.5 3.5 0 0 1 7.6 5.3l2.29 2.2 7.03 6.75-2.16 2.25z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                            <div class="_25jNX">
                                <div class="N3r_f">
                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                        {!! $fan->resized_image !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_1Wugc undefined">
                            <span class="_2MwKG">
                                <div data-bind="text: name()"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                     class="_1z7Hy _2JeVL"><g fill="none" fill-rule="evenodd"><path fill="#00AFFF"
                                                                                                    d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                fill="#FFF"
                                                d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span><span
                                    class="_1nCpf"><!-- react-text: 4460 -->James<!-- /react-text --><br>
                                <!-- react-text: 4462 -->May<!-- /react-text --><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="18" height="18"
                                                                                     viewBox="0 0 18 18"
                                                                                     class="_1z7Hy _2JeVL"><g
                                            fill="none" fill-rule="evenodd"><path fill="#00AFFF"
                                                                                  d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                fill="#FFF"
                                                d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span>
                            <p class="_14d4a" data-bind="text: bio"></p>
                            <a rel="nofollow" target="_blank" class="_30-Mx" data-bind="text: website" href="{{ $fan->website }}"></a>
                           <template id="follow-template">
                               <div class="_2aOYp">
                                   <button class="b9xa- _8GOLs _1h78h undefined"><span>Follow</span><span class="_3xWuC"><svg
                                                   xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                                   viewBox="0 0 8 8"><path fill="#FFF" fill-rule="evenodd"
                                                                           d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"></path></svg></span>
                                   </button>
                                   <button class="_32k0z">
                                       <div class="_32tSU">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                                class="_32tSU">
                                               <g fill="#000" fill-rule="evenodd">
                                                   <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"></path>
                                               </g>
                                           </svg>
                                       </div>
                                   </button>
                               </div>
                           </template>
                        </div>
                    </div>
                    <div class="GHC_I">
                        <p class="_177zr">{{ $fan->bio }}</p>
                        @if(!empty($fan->website))
                            <a rel="nofollow" target="_blank" class="Y5qEv"
                               href="{{ $fan->website }}">{{ $fan->getDomain() }}</a>
                        @endif
                    </div>
                </div>
                <div class="_3XlGZ">
                    <div class="_12g8o Pb65u"><span><span class="DdJUj">dribbles</span><span class="-DD7c">113.7K</span></span>
                    </div>
                    <div class="Pb65u"><a class="" href="/u/{{ $fan->slug }}/following"><span
                                    class="DdJUj">Following</span><span class="C6GXY"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="7"><path
                                            d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path></svg></span><span
                                    class="-DD7c">3</span></a></div>
                    <div class="GrqoM Pb65u"><a class="" href="/u/{{ $fan->slug }}/followers"><span class="DdJUj">Followers</span><span
                                    class="C6GXY"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="7"><path
                                            d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path></svg></span><span
                                    class="-DD7c">20.2K</span></a></div>
                </div>
            </div>
            <div class="_14963">
                <div class="_3hdBv">
                    <div class="_3yl6Y">
                        <a class="" href="/u/{{ $fan->slug }}/fanbases">
                            {{ $fan->nickname }}'s Fanbases <span class="aPjG8">
                                <span class="_2aiW-">({{ $fan->fanbases->count() }})</span>
                            </span>
                        </a>
                    </div>
                    <div class="Gp5Eg _2QjgM">
                        <div class="_3h6Wn">
                            <div class="_3dj9E">
                                <div class="_3nlN8">
                                    @foreach($fanbases as $k => $fanbase)
                                        <a class="_1mWot" href="/f/{{ $fanbase->slug }}">
                                            <div class="ZD12l _1iE2V">
                                                <div class="_2lssz">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        <img alt="" role="presentation" src="{{ $fanbase->resized_image }}" class="_214e9 b00q8" width="200" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1KQuz @if($k == 0) fFpBH @endif">
                                                <h3 class="_2o06m _1oBl0">
                                                    <span class="_1QEWe">
                                                        {{ $fanbase->name }}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                             viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none"
                                                                                                         fill-rule="evenodd"><path
                                                                        fill="#00AFFF"
                                                                        d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                                        fill="#FFF"
                                                                        d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                                                    </span>
                                                </h3>
                                                <div class="_1TvPX">
                                                    <div class="_1Ct87">
                                                        <span><span class="CrE3q">Fanbase Leader</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_2KkkC">
                            <div class="_2BZH3 _2niMs">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="_2i9BG"></span>
                <div>
                    <nav class="_3GkHt _11gfn">
                        <button class="zxDoM undefined">
                            Posted
                        </button>
                        <button class="_3UwsA zxDoM">
                            dribbled
                        </button>
                    </nav>
                    <div class="_1RYG9">
                        <div id="feed" class="">
                            <div>
                                <div class="_2u6Ki _1iE2V">
                                    <div class="_3gFQj">
                                        @foreach($posts as $k => $post)
                                            @if(fmod($k, 2))
                                                @include('post.item')
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="_3gFQj">
                                        @foreach($posts as $k => $post)
                                            @if(fmod($k + 1, 2))
                                                @include('post.item')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="_2L2jX"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {

            var data = {!! $fan->toJson() !!};

            var viewFanShowModel = {
                firstName: ko.observable(data.first_name ? data.first_name : '').extend({
                    required: {
                        message: 'First name is required.'
                    }
                }),
                lastName: ko.observable(data.last_name ? data.last_name : '').extend({
                    required: {
                        message: 'Last name is required.'
                    }
                }),
                name: function(){
                    return this.firstName() + " " + this.lastName();
                },
                id: ko.observable(data.id ? data.id : ''),
                bio: ko.observable(data.bio ? data.bio : ''),
                website: ko.observable(data.website ? data.website : ''),
                canProfileEdit: ko.observable(false),
                focusedFirstName: ko.observable(false),
                focusedLastName: ko.observable(false),
                focusedBio: ko.observable(false),
                focusedWebsite: ko.observable(false),
                showSettingsPopup: ko.observable(false),
                showEditPopup: ko.observable(false),
                enabled: ko.observable(true),
                canSave: function(){
                    return viewFanShowModel.errors().length === 0;
                },
                focusFirstName: function () {
                    this.focusedFirstName(true);
                },
                focusLastName: function () {
                    this.focusedLastName(true);
                },
                focusBio: function () {
                    this.focusedBio(true);
                },
                focusWebsite: function () {
                    this.focusedWebsite(true);
                },
                blurFirstName: function () {
                    if (this.firstName().length === 0) {
                        this.focusedFirstName(false);
                    }
                    this.toggleErrors();
                    this.showAllMessages();
                },
                blurLastName: function () {
                    if (this.lastName().length === 0) {
                        this.focusedLastName(false);
                    }
                    this.toggleErrors();
                    this.showAllMessages();
                },
                blurBio: function () {
                    if (this.bio().length === 0) {
                        this.focusedBio(false);
                    }
                },
                blurWebsite: function () {
                    if (this.website().length === 0) {
                        this.focusedWebsite(false);
                    }
                },
                openSettingsPopup: function () {
                    this.showSettingsPopup(!this.showSettingsPopup());
                },
                closeSettingsPopup: function () {
                    this.showSettingsPopup(false);
                },
                openEditPopup: function () {
                    this.showSettingsPopup(false);
                    this.showEditPopup(!this.showEditPopup());
                },
                closeEditPopup: function () {
                    this.showEditPopup(false);
                },
                showAllMessages: function () {
                    viewFanShowModel.errors.showAllMessages();
                },
                toggleErrors: function () {
                    $("._2Kdch").each(function () {
                        var $this = $(this);

                        if ($this.find('span._1u7op').is(':visible')) {
                            $this.addClass('p5bDW');
                        }
                        else {
                            $this.removeClass('p5bDW');
                        }
                    });
                },
                submit: function () {
                    viewFanShowModel.errors.showAllMessages();

                    if(this.canSave()){
                        this.enabled(true);

                        var data = JSON.stringify(
                            {
                                first_name: this.firstName(),
                                last_name: this.lastName(),
                                bio: this.bio(),
                                website: this.website(),
                                _method: "PATCH"
                            });

                        $.ajax({
                            url : "/profile/" + this.id(),
                            data : data,
                            type : 'PATCH',
                            contentType : 'application/json',
                            processData: false,
                            dataType: 'json',
                            success: function(response, textStatus, jqXhr) {
                                console.log("Responose:");
                                console.log(response);
                                this.closeEditPopup();
                                this.enabled(false);
                            }
                        });
                    }
                }
            };

            viewFanShowModel.errors = ko.validation.group(viewFanShowModel);

            if (viewFanShowModel.firstName().length > 0) {
                viewFanShowModel.focusFirstName();
                viewFanShowModel.blurFirstName();
            }

            if (viewFanShowModel.lastName().length > 0) {
                viewFanShowModel.focusLastName();
                viewFanShowModel.blurLastName();
            }

            if (viewFanShowModel.bio().length > 0) {
                viewFanShowModel.focusBio();
            }

            if (viewFanShowModel.website().length > 0) {
                viewFanShowModel.focusWebsite();
            }

            var followViewModel = function(params) {
                var self = this;
                self.requesterId = ko.observable(params.requester_id);
                self.requestedId = ko.observable(params.requested_id);
                self.isActive = ko.observable(params.level);

                self.save = function() {
                    var fan = {
                        requester_id: self.requesterId(),
                        requested_id: self.requestedId(),
                        is_active: self.isActive()
                    };

                    $.ajax("/fan", {
                        data: ko.toJSON(comment),
                        type: "post",
                        contentType: "application/json",
                        success: function(comment) {
                        }
                    });
                };
            };

            ko.components.register('follow', {
                viewModel: followViewModel,
                template: { element: 'follow-template' }
            });

            ko.applyBindings(viewFanShowModel, document.getElementById('fan-show-view-template'));
        });

    </script>
@endsection