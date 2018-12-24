CREATE TABLE `__PREFIX__group_set` (
  `group_img` varchar(120) DEFAULT '' COMMENT 'ƴ�ŷ���',
  `group_content` text COMMENT 'ƴ���淨'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `__PREFIX__group_join` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '',
  `group_id` int(20) unsigned NOT NULL DEFAULT 0 COMMENT '���ű�id',
  `active_id` int(20) unsigned NOT NULL DEFAULT '0' COMMENT '�id��group��id',
  `order_sn` bigint(20) unsigned NOT NULL COMMENT '�������',
  `pay_sn` bigint(20) unsigned NOT NULL COMMENT '֧������',
  `buyer_id` int(11) unsigned NOT NULL COMMENT '���id',
  `buyer_name` varchar(50) NOT NULL DEFAULT '' COMMENT '�������',
  `buyer_email` varchar(80) DEFAULT NULL COMMENT '��ҵ�������',
  `buyer_phone` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '����ֻ�',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '��������ʱ��',
  `payment_code` char(10) NOT NULL DEFAULT '' COMMENT '֧����ʽ���ƴ���',
  `payment_time` int(10) unsigned DEFAULT '0' COMMENT '֧��(����)ʱ��',
  `payment_starttime` int(10) unsigned DEFAULT '0' COMMENT '֧������ʱ��',
  `goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '��Ʒ�ܼ۸�',
  `order_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '�����ܼ۸�',
  `order_from` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1WEB2mobile',
  `invisible` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0��������-1 ��û���ڹ涨ʱ���ڸ���ɾ��',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00' COMMENT '��������',
  `trade_no` varchar(50) DEFAULT NULL COMMENT '�ⲿ���׶�����',
  `refund_trade_no` varchar(50) DEFAULT NULL COMMENT '�˿��ⲿ���׶�����',
  `refund_back_time` int(10) unsigned DEFAULT '0' COMMENT '�ɹ��˿�ʱ��',
  `refund_payment_code` varchar(50) DEFAULT NULL COMMENT '�˿�֧����ʽ���ƴ���',
  `refund_time` int(10) unsigned DEFAULT '0' COMMENT '�˿�ִ��ʱ��',
  `refund_status` tinyint(5) DEFAULT '0' COMMENT '0 Ĭ�ϣ�1�˿�ɹ� -1 �˿�ʧ�� 2 ֧���ɹ�',
  `refund_order_sn` varchar(50) DEFAULT NULL COMMENT '�˿����',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_sn` (`order_sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='���������';

CREATE TABLE `__PREFIX__group_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ƴ��id',
  `active_id` int(20) unsigned NOT NULL DEFAULT '0' COMMENT '�id��group��id',
  `buyer_id` int(11) unsigned NOT NULL COMMENT '���id',
  `buyer_name` varchar(50) NOT NULL DEFAULT '' COMMENT '�������',
  `buyer_email` varchar(80) DEFAULT NULL COMMENT '��ҵ�������',
  `buyer_phone` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '����ֻ�',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '״̬0 ������ 1 �ѳɹ� -1ʧ��',
  `num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '�ų�Ա����',
  `version` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '�汾��',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '��������ʱ��',
  `group_cron` tinyint(1) DEFAULT '0' COMMENT 'ƴ�Źرպ�ִ�мƻ�����ı�־ Ĭ��0�� 1��ʾִ��',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='�������ű�';

CREATE TABLE `__PREFIX__group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' id',
  `group_name` varchar(255) NOT NULL DEFAULT '' COMMENT '�����',
  `goods_name` varchar(255) NOT NULL DEFAULT '' COMMENT '��ʾ��Ʒ����',
  `goods_id` varchar(255) NOT NULL DEFAULT '' COMMENT 'ƴ�Ŷ�Ӧ��id',
  `group_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'ƴ�ż۸�',
  `group_content` varchar(255) NOT NULL DEFAULT '' COMMENT 'ƴ����Ʒ���',
  `group_person_num` int(11) NOT NULL DEFAULT '0' COMMENT '��������',
  `max_ok_group` int(11) NOT NULL DEFAULT '0' COMMENT '����������',
  `max_group` int(11) NOT NULL DEFAULT '0' COMMENT '���������',
  `add_num` int(11) NOT NULL DEFAULT '0' COMMENT 'ÿ�˲�������',
  `group_hour` int(11) NOT NULL DEFAULT '0' COMMENT '����ʱ��',
  `starttime` int(11) NOT NULL DEFAULT '0' COMMENT '������Чʱ��',
  `endtime` int(11) NOT NULL DEFAULT '0' COMMENT '���Ź���ʱ��',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `group_image` varchar(255) DEFAULT NULL COMMENT ' ƴ����Ʒ����',
  `is_shipping` tinyint(1) unsigned DEFAULT '0' COMMENT '�Ƿ����� 0 ������ 1 ��������',
  `stype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '�Ƿ�ɾ�� 0���� -1 ɾ��',
  `active_end_time` int(11) NOT NULL DEFAULT '0' COMMENT '�û�������������ʱ�䣬����ʱ��+�ʱ��',
  `head_welfare` varchar(10) CHARACTER SET utf8mb4 DEFAULT 'none' COMMENT '�ų���������  ��������  �ۿ� �޸���',
  `head_num` varchar(110) DEFAULT NULL COMMENT '������������',
  `head_welfare_type` varchar(10) DEFAULT 'none' COMMENT '��������',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='ƴ�ű�';
