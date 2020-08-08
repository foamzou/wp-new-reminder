<div id="wpbody" role="main">
    <div id="wpbody-content">
        <h1>消息通知设置</h1>
        <form name="form" method="post">
            <input type="hidden" name="router" value="Setting/save" />
            <p>喜欢本插件欢迎到<a href="https://github.com/foamzou/wp-new-reminder" target="_blank">GitHub</a>点个star，有任何建议也欢迎到<a href="https://github.com/foamzou/wp-new-reminder/issues" target="_blank">issue页面</a>提交反馈或贡献代码</p>

            <h2 class="title">请勾选希望通知的事件列表</h2>
            <p>嗯，目前只支持下面一个事件。有其他需求可以到issue提</p>
            <table class="form-table permalink-structure">
                <tbody>
                <tr>
                    <th scope="row">
                        <label><input name="eventNewContents" type="checkbox" <?php echo getOption('eventNewContents', false) ? 'checked="checked"' : '';?> value="1" /> 新的评论 </label>
                    </th>
                </tr>
                </tbody>
            </table>
            <h2 class="title">通知方式选择</h2>
            <table class="form-table" role="presentation">
                <tbody>
                <tr>
                    <select name="notifyType">
                        <option <?php echo getOption('notifyType', 'none') === 'none' ? 'selected' : '';?> value="none">不通知</option>
                        <option <?php echo getOption('notifyType', 'none') === 'dingTalk' ? 'selected' : '';?> value="dingTalk">钉钉</option>
                        <option <?php echo getOption('notifyType', 'none') === 'tg' ? 'selected' : '';?> value="tg">TG Bot</option>
                        <option <?php echo getOption('notifyType', 'none') === 'custom' ? 'selected' : '';?> value="custom">自定义链接</option>
                    </select>
                </tr>
                <tr>
                    <th><label for="dingTalk">钉钉机器人配置</label></th>
                    <td>
                        <p>AccessToken</p>
                        <input name="dingTalkAccessToken" id="dingTalk" type="text" value="<?php echo getOption('dingTalkAccessToken');?>" class="large-text code" />
                        <p>关 键 词</p>
                        <input name="dingTalkKeyword" type="text" value="<?php echo getOption('dingTalkKeyword');?>" class="regular-text code" placeholder="暂时只支持关键字模式"/>
                    </td>
                </tr>

                <tr>
                    <th><label for="tgbot">TG Bot 配置</label></th>
                    <td>
                        <p>ChatId</p>
                        <input name="tgbotChatId" id="tgbot" type="text" value="<?php echo getOption('tgbotChatId')?>" class="regular-text code" placeholder="群组chatId"/>
                        <p>Token</p>
                        <input name="tgbotToken" type="text" value="<?php echo getOption('tgbotToken')?>" class="large-text code" placeholder="在你申请bot的时候会提供给你的，形如 13123123123:AAFASpfasyadqhf6a7sfASFAqgFNiJJwWohIsdas8das"/>
                    </td>
                </tr>

                <tr>
                    <th><label for="customLink">自定义链接</label></th>
                    <td>
                        <input name="customLink" id="customLink" type="text" value="<?php echo getOption('customLink');?>" class="large-text code" placeholder="例如：http://foo.com/sender?key=foo&msg=#MSG# 。程序将会用评论内容替换掉#MSG#，然后以GET请求发送给你"/>
                    </td>
                </tr>

                </tbody>
            </table>
            <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="保存修改" /></p>
        </form>
    </div>
    <div class="clear"></div>
</div>
<!-- wpbody-content -->
<div class="clear"></div>
