<!-- Chat box -->
<div class="chat-box">
    <div class="chat">
        <div class="chat-header">
            <div class="cb-pic">
                <img class="img-fluid" src="<?php echo HTTP_PATH; ?>app-assets/images/icon-user.png" alt="avatar">
            </div>
            <div class="cb-name">
                <div class="title mb-1">Lê Văn Đạt</div>
                <span class="time">Hôm nay 09:56 AM </span>
            </div>
            <div class="cb-toggle">
                <i class="fal cb-toggle-close"></i>
            </div>
        </div>
        <div class="chat-body">
            <div class="messages" id="chat">
                <div class="flex-1">
                    <div class="time"> Hôm nay 09:56 AM </div>
                    <div class="message-content host">
                        Chào bạn! Có chuyện gì thế? 👋
                    </div>
                    <div class="message-content guest">
                        Bạn đến từ đâu?
                    </div>
                    <div class="message-content host">
                        Một nơi rất xa! 🤣
                    </div>
                    <div class="message-content guest">
                        Uh, vấn đề của bạn này là gì? 🤔
                    </div>
                    <div class="message-content guest">
                        Uh, he's from space, he came here to steal a necklace from a wizard.
                    </div>
                    <div class="message-content guest">
                        <div class="typing typing-1"></div>
                        <div class="typing typing-2"></div>
                        <div class="typing typing-3"></div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="chat-footer">
            <div class="input">
                <textarea maxlength="1024" placeholder="Nhập tin nhắn…" rows="1" data-emojiable="true" class="message-input--input"></textarea>
                
            </div>
            <div class="d-flex flex-row align-self-end">
                <div class="action ml-1 mr-1">
                    <input class="" type="file" name="" id="" accept="image/*">
                    <i class="icon-attachment"></i>
                </div>
                <div class="action action-send" href="">
                    <input class="" type="submit" name="" id="">
                    <i class="icon-paperplane"></i>
                </div>
            </div>

        </div>
        
    </div>
    <div class="chat-circle">
        <i class="icon-bubbles5 position-relative"><span class="badge">5</span></i>
    </div>
</div>
<!-- /Chat box -->
