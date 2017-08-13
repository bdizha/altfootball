<template id='comments-template'>
    <div data-bind="if: level() === 0 && isList() === false">
        <h2 class="_1lisf">Join in</h2>
        <form class="_33rbn _2XbY_" data-bind="submit: saveComment">
            <div data-bind="fileDrag: fileData">
                <div>
                    <div>
                        <textarea placeholder="Want to add something?" class="_1FJkk _2u-lb" data-bind="value: newCommentText, valueUpdate: 'afterkeyup'"></textarea>
                    </div>
                    <div class="_3hgGE" data-bind="visible: fileData().dataURL">
                        <button class="_1Zj5n _1PzVp" type="button">
                            <svg width="10" height="10">
                                <path fill="none" stroke="#00AFFF" stroke-linecap="square" stroke-width="2" d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                            </svg>
                        </button>
                        <img class="b00q8" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                    </div>
                </div>
                <div class="_3FA_l">
                    <div class="_2A7z5 _29E8b">
                        <label for="Lag4Ra_iR6WLzgJC0dSaxQ" class="NOB1F">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#00AFFF"
                                          d="M16.5 13.1h-2.04A5.6 5.6 0 0 0 9 6.1a5.64 5.64 0 0 0-5.46 7H1.5V4.8h15v8.3zM9 15.87A4.14 4.14 0 1 1 9 7.6a4.14 4.14 0 0 1 0 8.28zM6.94 1.5h4.12l1.25 1.8H5.69l1.25-1.8zm10.31 1.8h-3.12L12.08.32a.75.75 0 0 0-.62-.32H6.54a.75.75 0 0 0-.62.32L3.87 3.3H.75a.75.75 0 0 0-.75.75v9.8c0 .41.34.75.75.75h3.4a5.63 5.63 0 0 0 9.7 0h3.4c.41 0 .75-.34.75-.75v-9.8a.75.75 0 0 0-.75-.75z"></path>
                                    <path fill="#00AFFF"
                                          d="M9 13.23a1.5 1.5 0 1 1 0-2.99 1.5 1.5 0 0 1 0 3m0-4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5"></path>
                                </g>
                            </svg>
                        </label>
                        <input type="file" name="Lag4Ra_iR6WLzgJC0dSaxQ" id="Lag4Ra_iR6WLzgJC0dSaxQ" data-bind="fileInput: fileData" accept="image/*" />
                    </div>
                    <button type="submit" class="_1kqns" data-bind="enable: canSubmitComment">Post</button>
                </div>
            </div>
        </form>
    </div>
    <!-- ko if: level() === 0 && isList() === false -->
    <div class="_2uxNN">
        Tackles(<span data-bind="text: commentsCount"></span>)
    </div>
    <!-- /ko -->
    <ul class="_1RyqV" data-bind="foreach: comments(), visible: comments().length > 0">
        <li class="gEjmr" data-bind="attr: { id: 'comment-' + id }">
            <span class="_3HYOY"></span>
            <div class="mkIC1">
                <a class="" data-bind="attr: { href: '/u/' + user.slug }">
                    <div class="_25jNX _3kBjx">
                        <div class="N3r_f">
                            <div class="_38L6D" style="padding-bottom: 100%;">
                                <img class="_214e9 b00q8" data-bind="attr: { src: user.image }">
                            </div>
                        </div>
                    </div>
                </a>
                <a class="_1lUs3" data-bind="attr: { href: '/u/' + user.slug }, text: user.name"></a>
                <dribbles class="_2MdIb" params='count: dribbles_count, type_id: id, has_dribble: has_dribble, type: "comment"'></dribbles>
            </div>
            <p class="_2OqId">
                <span>
                    <span data-bind="html: html_content"></span>
                </span>
            </p>
            <div class="W6jQs" data-bind="visible: image">
                <div class="_1KXFt">
                    <div class="_3WIsa YRuUa _242Fk">
                        <img data-bind="attr: { src: image }" role="presentation" class="_2PoG-" />
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" class="_2PRiK">
                    <path fill="#FFF" fill-rule="evenodd" d="M5.52 6.58L1.5 2.56v.66a.75.75 0 1 1-1.5 0V.8C0 .4.33.05.74.04L3.2 0a.75.75 0 1 1 .03 1.5l-.67.01 4.01 4.01a.75.75 0 0 1-1.06 1.06m7.1 0l4.02-4.02v.66a.75.75 0 1 0 1.5 0V.8a.75.75 0 0 0-.74-.75L14.93 0a.75.75 0 1 0-.03 1.5l.67.01-4.01 4.01a.75.75 0 0 0 1.06 1.06m-7.1 5.1L1.5 15.7v-.66a.75.75 0 1 0-1.5 0v2.43c0 .41.33.75.74.75l2.47.04a.75.75 0 1 0 .03-1.5h-.67l4.01-4.02a.75.75 0 0 0-1.06-1.06m7.1 0l4.02 4.02v-.66a.75.75 0 1 1 1.5 0v2.43c0 .41-.33.75-.74.75l-2.47.04a.75.75 0 1 1-.03-1.5h.67l-4.01-4.02a.75.75 0 0 1 1.06-1.06"></path>
                </svg>
            </div>
            <div class="BNBMP">
                <div class="_1aSFb" data-bind="text: published_at"></div>
                <div class="_22SkP">
                    <button data-bind="click: $parent.reply">Reply</button>
                </div>
            </div>
            <div class="_55ghi">
                <reply-form params='comment: $data, user: $parent.user, callback: $parent.update'></reply-form>
            </div>
            <div data-bind="if: comments.length > 0">
                <comments params='comments: comments, type_id: comments.id, level: 1, root: $root'></comments>
            </div>
            <!-- ko if: $parent.level() > 0 && $index() === 0 && $parent.isList() == false -->
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" class="_1CwzX">
                <g fill="#00AFFF" fill-rule="evenodd">
                    <path d="M12.57 6.5H1.54V1.54h1.17A.77.77 0 0 0 2.7 0H.77A.77.77 0 0 0 0 .77v6.46c0 .42.34.77.77.77h11.77l.03-1.5z"></path>
                    <path d="M13.82 6.7l-4.5-4.5a.77.77 0 1 0-1.08 1.1l3.11 3.12.87.73-.72.84-3.2 3.2a.77.77 0 0 0 1.09 1.1l4.46-4.47c.3-.3.3-.79 0-1.09l-.03-.02"></path>
                </g>
            </svg>
            <!-- /ko -->
        </li>
    </ul>
</template>
<template id='reply-form-template'>
    <div class="ivfOh _3ZzkS">
        <div class="_1HA3l _3CHps">
            <div class="_25jNX _2l14J">
                <div class="N3r_f">
                    <div class="_38L6D" style="padding-bottom: 100%;">
                        <img alt="" role="presentation" data-bind="attr: { src: currentUser().image }" class="_214e9 b00q8" width="60" height="60">
                    </div>
                </div>
            </div>
            <div>
                <div class="_1bkDE" data-bind="text: currentUser().name"></div>
                <div class="BB62-">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" class="_3TxDq">
                        <path fill-rule="evenodd" d="M7 12L0 6l7-6v1.86L2.16 6 7 10.14"></path>
                    </svg>
                    <span data-bind="text: comment().user.name"></span>
                </div>
            </div>
        </div>
        <form class="_33rbn ODDw0" data-bind="submit: saveReply">
            <div data-bind="fileDrag: fileData">
                <div class="sc-bdVaJa fBUmFc">
                    <div>
                        <textarea placeholder="What are your thoughts?" data-bind="value: replyText, valueUpdate: 'afterkeyup'" class="_3fi2B _2u-lb"></textarea>
                    </div>
                    <img style="height: 100px;" class="b00q8" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                </div>
                <div class="_3FA_l">
                    <div class="_2A7z5 _29E8b">
                        <label for="media-upload" class="NOB1F">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" viewBox="0 0 27 21">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#95A0AF" stroke-width="1.8" d="M9.93 1.32l-2.18 3.5H1.8c-.5 0-.9.4-.9.9V19.2c0 .5.4.9.9.9h22.9c.5 0 .9-.4.9-.9V5.72c0-.5-.4-.9-.9-.9h-5.95l-2.18-3.5A.9.9 0 0 0 15.8.9h-5.1a.9.9 0 0 0-.77.42z"></path>
                                    <ellipse cx="13.25" cy="12.1" stroke="#95A0AF" strok    e-width="1.8" rx="5.19" ry="5.15"></ellipse>
                                    <path fill="#95A0AF" d="M20.95 8.9a.9.9 0 1 0 0-1.78c-.5 0-.9.4-.9.89s.4.89.9.89"></path>
                                </g>
                            </svg>
                        </label>
                        <input type="file" name="media-upload" id="media-upload" data-bind="fileInput: fileData" accept="image/*" />
                    </div>
                    <button class="_2LRWs _1kqns" data-bind="click: cancel" type="button">Cancel</button>
                    <button type="submit" class="_1kqns" data-bind="enable: canSubmitReply">Post</button>
                </div>
            </div>
        </form>
    </div>
</template>