# wp-new-reminder （WordPress插件：消息事件提醒）


## 支持的事件
- 新的评论

## 支持的通知机制
- 钉钉机器人
- Tg Bot
- 自定义链接（将通过HTTP GET请求发送）

## 安装方法
- 下载 wp-new-reminder 压缩包 或 git clone本项目，放到 /wp-content/plugins/目录下
- 在后台插件列表中激活 wp-new-reminder
- 插件列表里wp-new-reminder 的描述信息有"点我"链接，点进去配置

## 注意
- 众所周知的原因，中国境内的服务器访问 tg 接口会超时，如果你的博客部署在国内，请使用其他通知方式。ps. 后续可能会加http代理配置选项

### Change Logs
*1.0.0 (2020/08/09)*
* 发布第一个版本
* 支持钉钉、TGBot和简单的URL(支持HTTP GET的)通知
