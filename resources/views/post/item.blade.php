<?php $fanbase = $post->fanbase() ?>
<div class="p32Iu">
    <div class="_3bxb0">
        <div class="_2WwnI">
            <div class="_1pPnu">
                <div class="_2VAHq">
                    <a href="{{ $post->slug }}">
                        <div class="_1yAXU">
                            <div style="padding-bottom:100%;" class="_38L6D">
                                {!! $post->user->resized_image !!}
                            </div>
                        </div>
                    </a>
                    <span class="_1NHvQ _3Xf-w">
                        <a href="/u/{{ $post->user->slug }}">
                           {{ $post->user->nickname }}
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="18"
                                    viewBox="0 0 18 18" class="_1z7Hy"
                                  >
                              <g fill="none"
                                 fill-rule="evenodd"
                               >
                                 <path
                                         fill="#64c431"
                                         d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                       ></path>
                                 <path
                                         fill="#FFF"
                                         d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                       ></path>
                              </g>
                           </svg>
                        </a>
                        <span>
                           <span>
                               posted in <br>
                           </span>
                           <a class="_1XNRF" href="/f/{{ $fanbase->slug }}">
                             {{ $fanbase->name }}
                           </a>
                        </span>
                     </span>
                </div>
                <div class="_3qkzJ">
                    <p class="_2B25b">
                        <span class="_2jvdf">{{ $post->published_at }}</span>
                    </p>
                    <p class="TATrW">
                        {{ ++$post->views }}K Views
                    </p>
                </div>
            </div>
            <div class="r9rA5">
                <button class="_2KGdb _34-mC">
                    <div class="_1CwPf">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                             height="20" viewBox="0 0 19 20"
                           >
                            <path fill="#00AFFF" fill-rule="evenodd"
                                  stroke="#00AFFF" stroke-width=".5"
                                  d="M14.75 12.57c-1.04 0-1.96.49-2.55 1.25l-4.95-2.76a3.23 3.23 0 0 0 0-2.13l4.94-2.76a3.21 3.21 0 1 0-.48-.89L6.77 8.04a3.22 3.22 0 1 0 0 3.9l4.95 2.77a3.2 3.2 0 0 0 3.03 4.3 3.22 3.22 0 0 0 0-6.44zm0-10.56a2.21 2.21 0 1 1 0 4.42 2.21 2.21 0 0 1 0-4.42zM4.22 12.21a2.21 2.21 0 1 1 0-4.43 2.21 2.21 0 0 1 0 4.43zm10.53 5.78a2.21 2.21 0 1 1 0-4.42 2.21 2.21 0 0 1 0 4.42z"
                                ></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <div>
            <a class="_2hvwD" href="{{ route('post.show', ['slug' => $post->slug]) }}">
                <div class="_25bvT">
                    <div style="padding-bottom:56.25%;" class="_38L6D">
                        {!! $post->resized_image !!}
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
            <a class="_2Oo2A rF2QA" href="{{ route('post.show', ['slug' => $post->slug]) }}#tackles">
              <span class="_35FcZ">
                Tackles
                 <span class="_3HP-Q">
                     ({{ $post->comments->count() }})
                 </span>
              </span>
            </a>
            <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span>
            </div>
            <dribbles params='count: {!! $post->dribbles->count() !!}, type_id: {{ $post->id }}, has_dribble: {{ $post->has_dribble }}, type: "post"'></dribbles>
        </div>
        <comments params='comments: {!! $post->limited_comments !!}, type_id: {{ $post->id }}, level: 0, root: $root, is_list: true'></comments>
    </div>
</div>