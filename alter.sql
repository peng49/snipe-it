########################### 数据结构变更记录 #############################

# 型号和目录添加code字段，用来生成标签
ALTER TABLE `models` ADD COLUMN `code` VARCHAR(16) NOT NULL DEFAULT '' COMMENT '型号编码,生成标签使用';
ALTER TABLE `categories` ADD COLUMN `code` VARCHAR(16) NOT NULL DEFAULT '' COMMENT '目录编码,生成标签使用';
