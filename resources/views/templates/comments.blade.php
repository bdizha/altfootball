<template id='comments-template'>

    <!-- ko if: level() === 0 && isList() === false -->
    <div class="_2uxNN">
        Responses (<span data-bind="text: commentsCount"></span>)
    </div>
    <div class="ivfOh">
        <div class="sc-bwCtUz bgTWiC">
            <span class="sc-hrWEMg fneZyH">
                <div class="sc-eTuwsz dDnmGN">
                    <div style="padding-bottom:100%;" class="_38L6D">
                        <img alt="" role="presentation" data-bind="attr: { src: currentUser().image }" class="_214e9 b00q8" width="60" height="60">
                    </div>
                </div>
            </span>
            <div class="sc-epnACN YkbCv" href="/f/manchester-football">
                <div class="_74oom">
                    <div class="_eeohz">
                        <a class="" data-bind="attr: { href: '/u/' + currentUser.slug }, text: currentUser().name"></a>
                        <span>@ManchesterFootball!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18" class="_1z7Hy">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="rgba(32, 198, 89, 0.95)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                <path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="_csp04">
                        <span class="_iuvin _ov9ai">
                            <button class="_qv64e _iokts _4tgw8 _njrw0">Reply</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <form class="_33rbn ODDw0" data-bind="submit: saveComment">
            <div data-bind="fileDrag: fileData" class="filedrag">
                <div class="sc-bdVaJa fBUmFc">
                    <div>
                        <textarea placeholder="Write a response..." class="_3fi2B _2u-lb" data-bind="value: newCommentText, valueUpdate: 'afterkeyup', event: { focus: checkAuth }"></textarea>
                    </div>
                </div>
                <div class="_3hgGE" data-bind="visible: fileData().dataURL">
                    <button class="_1Zj5n _1PzVp" type="button">
                        <svg width="10" height="10">
                            <path fill="none" stroke="rgba(51, 74, 108, 0.65)" stroke-linecap="square" stroke-width="2" d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                        </svg>
                    </button>
                    <img class="b00q8" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                </div>
                <div class="_3FA_l">
                    <div class="_2A7z5 _29E8b">
                        <label for="media-upload" class="NOB1F">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" viewBox="0 0 27 21">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="rgba(51, 74, 108, 0.65)" stroke-width="1.8" d="M9.93 1.32l-2.18 3.5H1.8c-.5 0-.9.4-.9.9V19.2c0 .5.4.9.9.9h22.9c.5 0 .9-.4.9-.9V5.72c0-.5-.4-.9-.9-.9h-5.95l-2.18-3.5A.9.9 0 0 0 15.8.9h-5.1a.9.9 0 0 0-.77.42z"></path>
                                    <ellipse cx="13.25" cy="12.1" stroke="rgba(51, 74, 108, 0.65)" e-width="1.8" rx="5.19" ry="5.15"></ellipse>
                                    <path fill="rgba(51, 74, 108, 0.65)" d="M20.95 8.9a.9.9 0 1 0 0-1.78c-.5 0-.9.4-.9.89s.4.89.9.89"></path>
                                </g>
                            </svg>
                        </label>
                        <input type="file" name="media-upload" id="media-upload" data-bind="fileInput: fileData" accept="image/*">
                    </div>
                    <button type="submit" class="3OD4J _1yV5F _1h78h" data-bind="enable: canSubmitComment" disabled="">Post</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /ko -->
    <ul class="_1RyqV" data-bind="foreach: comments(), visible: comments().length > 0">
        <li class="gEjmr" data-bind="attr: { id: 'comment-' + id }">
            <div class="sc-bwCtUz bgTWiC">
                <span class="sc-hrWEMg fneZyH">
                    <div class="sc-eTuwsz dDnmGN">
                        <div style="padding-bottom:100%;" class="_38L6D">
                            <img alt="" role="presentation" data-bind="attr: { src: user.thumb_x }" class="_214e9 b00q8" width="60" height="60">
                        </div>
                    </div>
                </span>
                <div class="sc-epnACN YkbCv" href="/f/manchester-football">
                    <div class="_74oom">
                        <div class="_eeohz">
                            <a class="" data-bind="attr: { href: '/u/' + user.slug }, text: user.name"></a>
                            <span>@ManchesterFootball!</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18" class="_1z7Hy">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="rgba(32, 198, 89, 0.95)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                    <path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="_csp04">
                        <span class="_iuvin _ov9ai">
                            <button class="_qv64e _iokts _4tgw8 _njrw0">Follow</button>
                        </span>
                            <span class="_2jvdf" data-bind="text: published_at"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_2OqId">
                <div class="_FT34Y"></div>
                <div class="_KL89E" data-bind="html: html_content"></div>
            </div>
            <div class="W6jQs" data-bind="visible: image">
                <div class="_1KXFt">
                    <div class="_3WIsa YRuUa _242Fk">
                        <img data-bind="attr: { src: image }" role="presentation" class="_2PoG-" />
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="_2PRiK">
                    <path fill="rgba(255, 255, 255, 1)" fill-rule="evenodd" d="M5.52 6.58L1.5 2.56v.66a.75.75 0 1 1-1.5 0V.8C0 .4.33.05.74.04L3.2 0a.75.75 0 1 1 .03 1.5l-.67.01 4.01 4.01a.75.75 0 0 1-1.06 1.06m7.1 0l4.02-4.02v.66a.75.75 0 1 0 1.5 0V.8a.75.75 0 0 0-.74-.75L14.93 0a.75.75 0 1 0-.03 1.5l.67.01-4.01 4.01a.75.75 0 0 0 1.06 1.06m-7.1 5.1L1.5 15.7v-.66a.75.75 0 1 0-1.5 0v2.43c0 .41.33.75.74.75l2.47.04a.75.75 0 1 0 .03-1.5h-.67l4.01-4.02a.75.75 0 0 0-1.06-1.06m7.1 0l4.02 4.02v-.66a.75.75 0 1 1 1.5 0v2.43c0 .41-.33.75-.74.75l-2.47.04a.75.75 0 1 1-.03-1.5h.67l-4.01-4.02a.75.75 0 0 1 1.06-1.06"></path>
                </svg>
            </div>
            <div class="BNBMP">
                <div class="_1aSFb" data-bind="text: published_at"></div>
                <div class="_22SkP">
                    <button data-bind="click: $parent.reply">Reply</button>
                </div>
            </div>
            <div class="_55ghi">
                <reply-form params='comment: $data, user: user, callback: $parent.update'></reply-form>
            </div>
            <div data-bind="if: comments.length > 0">
                <comments params='comments: comments, type_id: comments.id, level: 1, root: $root'></comments>
            </div>
            <!-- ko if: $parent.level() > 0 && $index() === 0 && $parent.isList() == false -->
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" class="_1CwzX">
                <g fill="rgba(51, 74, 108, 0.65)" fill-rule="evenodd">
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
                        <img alt="" role="presentation" data-bind="attr: { src: user.thumb_x }" class="_214e9 b00q8" width="60" height="60">
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
                                    <path stroke="rgba(51, 74, 108, 0.65)" stroke-width="1.8" d="M9.93 1.32l-2.18 3.5H1.8c-.5 0-.9.4-.9.9V19.2c0 .5.4.9.9.9h22.9c.5 0 .9-.4.9-.9V5.72c0-.5-.4-.9-.9-.9h-5.95l-2.18-3.5A.9.9 0 0 0 15.8.9h-5.1a.9.9 0 0 0-.77.42z"></path>
                                    <ellipse cx="13.25" cy="12.1" stroke="rgba(51, 74, 108, 0.65)" stroke-width="1.8" rx="5.19" ry="5.15"></ellipse>
                                    <path fill="rgba(51, 74, 108, 0.65)" d="M20.95 8.9a.9.9 0 1 0 0-1.78c-.5 0-.9.4-.9.89s.4.89.9.89"></path>
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