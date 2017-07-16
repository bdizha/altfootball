<div class="p32Iu">
    <div class="_3bxb0">
        <div class="_2WwnI">
            <div class="_1pPnu">
                <div class="_2VAHq">
                    <a href="{{ $post->slug }}">
                        <div class="_1yAXU">
                            <div style="padding-bottom:100%;" class="_38L6D">
                                <img alt="{{ $post->user->first_name }}"
                                     src="{{ $post->image }}" class="_214e9 b00q8"
                                     width="32" height="32"/>
                            </div>
                        </div>
                    </a>
                    <span class="_1NHvQ _3Xf-w" data-reactid="146">
                                    <a href="/{{ $post->user->nickname }}">
                                       {{ $post->user->nickname }}
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="18"
                                                viewBox="0 0 18 18" class="_1z7Hy"
                                                data-reactid="149">
                                          <g fill="none"
                                             fill-rule="evenodd"
                                             data-reactid="150">
                                             <path
                                                     fill="#64c431"
                                                     d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                     data-reactid="151"></path>
                                             <path
                                                     fill="#FFF"
                                                     d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                     data-reactid="152"></path>
                                          </g>
                                       </svg>
                                    </a>
                                    <span>
                                       <span>
                                           posted in <br>
                                       </span>
                                       <a class="_1XNRF" href="/fb/c8KJMqmTRo-z4v4sDHGtXw?iid=RO3aO8AmThi5FWCI23bHSg">
                                         QUIZ NATION
                                       </a>
                                    </span>
                                 </span>
                </div>
                <div class="_3qkzJ">
                    <p class="_2B25b">
                        <span class="_2jvdf">{{ $post->getDate() }}</span>
                    </p>
                    <p class="TATrW">
                        100.2K Views
                    </p>
                </div>
            </div>
            <div class="r9rA5" data-reactid="166">
                <button class="_2KGdb _34-mC" data-reactid="167">
                    <div class="_1CwPf" data-reactid="168">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                             height="20" viewBox="0 0 19 20"
                             data-reactid="169">
                            <path fill="#000" fill-rule="evenodd"
                                  stroke="#000" stroke-width=".5"
                                  d="M14.75 12.57c-1.04 0-1.96.49-2.55 1.25l-4.95-2.76a3.23 3.23 0 0 0 0-2.13l4.94-2.76a3.21 3.21 0 1 0-.48-.89L6.77 8.04a3.22 3.22 0 1 0 0 3.9l4.95 2.77a3.2 3.2 0 0 0 3.03 4.3 3.22 3.22 0 0 0 0-6.44zm0-10.56a2.21 2.21 0 1 1 0 4.42 2.21 2.21 0 0 1 0-4.42zM4.22 12.21a2.21 2.21 0 1 1 0-4.43 2.21 2.21 0 0 1 0 4.43zm10.53 5.78a2.21 2.21 0 1 1 0-4.42 2.21 2.21 0 0 1 0 4.42z"
                                  data-reactid="170"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <div data-reactid="171">
            <a class="_2hvwD"
               href="{{ route('post.show', ['slug' => $post->slug]) }}"
               data-reactid="172">
                <div class="_25bvT">
                    <div style="padding-bottom:56.25%;" class="_38L6D">
                        {!! $post->getImage() !!}
                    </div>
                </div>
                <h2 class="_2DyJ3 _3duUm">{{ $post->title }}</h2>
            </a>
            <h3 class="_2hvwD _3VB1o _3duUm _2L6V9">
                                                <span>
                                                    <span>{{ $post->summary }}</span>
                                                </span>
            </h3>
            <a class="_2hvwD _1kgtA"
               href="{{ route('post.show', ['slug' => $post->slug]) }}">
                Read story
            </a>
        </div>
        <div class="_35O2p _29Okg">
            <a class="_2Oo2A rF2QA"
               href="{{ route('post.show', ['slug' => $post->slug]) }}#comments">
                                              <span class="_35FcZ">
                                                Comments
                                                 <span class="_3HP-Q">
                                                     (34)
                                                 </span>
                                              </span>
            </a>
            <div class="_8m6WC rF2QA"><span class="_35FcZ">Repost</span>
            </div>
            <button class="_3yFg8 rF2QA" data-reactid="191">
                <div class="_1_VaP" data-reactid="192">
                    <span class="_35FcZ">Bumps</span>
                    <span class="_3HP-Q">
                                                        (35)
                                                     </span>
                    <svg width="24" height="23" viewBox="-3 -3 23 24"
                         data-reactid="198">
                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z"
                              fill="#000" fill-rule="evenodd" opacity="1"
                              class="outline" data-reactid="199"></path>
                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75"
                              fill="#F71700" fill-rule="evenodd" opacity="0"
                              class="heart" data-reactid="200"></path>
                    </svg>
                </div>
            </button>
        </div>
        <ul class="_8vnW9" data-reactid="201">
            <li class="gEjmr _2F2p0 undefined" id="ARl9VNCtSQi5LIXaPTxdMw"
                data-reactid="202">
                <div class="mkIC1" data-reactid="203">
                    <a class=""
                       href="/u/T5XBPbW3REiuuHDoBo8u7A"
                       data-reactid="204">
                        <div class="_25jNX _3kBjx" data-reactid="205">
                            <div class="N3r_f" data-reactid="206">
                                <div style="padding-bottom:100%;"
                                     class="_38L6D" data-reactid="207"><img
                                            alt="" role="presentation"
                                            src="https://graph.facebook.com/10155216734116518/picture?type=square&amp;width=200&amp;height=200"
                                            class="_214e9 b00q8" width="60"
                                            height="60" data-reactid="208">
                                </div>
                            </div>
                            <!-- react-empty: 209 -->
                        </div>
                    </a>
                    <a class="_1lUs3" href="/u/T5XBPbW3REiuuHDoBo8u7A"
                       data-reactid="210">
                        <!-- react-text: 211 -->Foo
                        <!-- /react-text --><!-- react-text: 212 -->
                        <!-- /react-text --><!-- react-text: 213 -->Wei
                        <!-- /react-text --><!-- react-empty: 214 -->
                    </a>
                </div>
                <div class="ulcnF" data-reactid="215"><span class="_7y6Vl"
                                                            data-reactid="216"><span
                                class="_1saq1" data-reactid="217"><span
                                    data-reactid="218"><span
                                        data-reactid="219">Italy Legend Reportedly Rejects Move to States & China in Order to Stay With His Beloved Roma</span></span></span></span>
                </div>
                <div class="BNBMP" data-reactid="220">
                    <div class="_1aSFb" data-reactid="221">10 mins ago</div>
                    <div class="_22SkP" data-reactid="222">
                        <button data-reactid="223">
                            <!-- react-text: 224 -->
                            Reply <!-- /react-text -->
                        </button>
                    </div>
                </div>
            </li>
            <li class="gEjmr _2F2p0 undefined" id="bn7b8rHISDChoKMNr9R_0Q"
                data-reactid="225">
                <div class="mkIC1" data-reactid="226">
                    <a class=""
                       href="/u/bLghGI0CTKKsPkKbUg-boA"
                       data-reactid="227">
                        <div class="_25jNX _3kBjx" data-reactid="228">
                            <div class="N3r_f" data-reactid="229">
                                <div style="padding-bottom:100%;"
                                     class="_38L6D" data-reactid="230"><img
                                            alt="" role="presentation"
                                            src="http://images0.minutemediacdn.com/production/912x516/5947c5d8a7aa7ee6e4000001.jpg"
                                            class="_214e9 b00q8" width="60"
                                            height="60" data-reactid="231">
                                </div>
                            </div>
                            <!-- react-empty: 232 -->
                        </div>
                    </a>
                    <a class="_1lUs3" href="/u/bLghGI0CTKKsPkKbUg-boA"
                       data-reactid="233">
                        <!-- react-text: 234 -->Chris
                        <!-- /react-text --><!-- react-text: 235 -->
                        <!-- /react-text --><!-- react-text: 236 -->H
                        <!-- /react-text --><!-- react-empty: 237 -->
                    </a>
                </div>
                <div class="ulcnF" data-reactid="238"><span class="_7y6Vl"
                                                            data-reactid="239"><span
                                class="_1saq1" data-reactid="240"><span
                                    data-reactid="241"><span
                                        data-reactid="242">100</span></span></span></span>
                </div>
                <div class="BNBMP" data-reactid="243">
                    <div class="_1aSFb" data-reactid="244">57 mins ago</div>
                    <div class="_22SkP" data-reactid="245">
                        <button data-reactid="246">
                            <!-- react-text: 247 -->
                            Reply <!-- /react-text -->
                        </button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>