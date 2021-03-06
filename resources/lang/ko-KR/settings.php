<?php

return [

    'company' => [
        'name'              => '이름',
        'email'             => '이메일',
        'phone'             => '휴대전화',
        'address'           => '주소',
        'logo'              => '로고',
    ],
    'localisation' => [
        'tab'               => '지역화',
        'financial_start'   => '회계 시작 년도',
        'timezone'          => '시간대',
        'date' => [
            'format'        => '일자표시형식',
            'separator'     => '날짜 구분 기호',
            'dash'          => '대시 (-)',
            'dot'           => '점 (.)',
            'comma'         => '쉼표 (,)',
            'slash'         => '슬래시 (/)',
            'space'         => '공백 ( )',
        ],
        'percent' => [
            'title'         => '퍼센트 (%) 위치',
            'before'        => '이전 번호',
            'after'         => '다음 번호',
        ],
    ],
    'invoice' => [
        'tab'               => '청구서',
        'prefix'            => '번호 접두사',
        'digit'             => '숫자 자리수',
        'next'              => '다음 수',
        'logo'              => '로고',
        'custom'            => '사용자 지정',
        'item_name'         => '항목명',
        'item'              => '항목',
        'product'           => '상품',
        'service'           => '서비스',
        'price_name'        => '가격 이름',
        'price'             => '가격',
        'rate'              => '비율',
        'quantity_name'     => '수량 이름',
        'quantity'          => '수량',
    ],
    'default' => [
        'tab'               => '기본값',
        'account'           => '기본 계정',
        'currency'          => '기본 통화',
        'tax'               => '기본 세율',
        'payment'           => '기본 결제 방법',
        'language'          => '기본 언어',
    ],
    'email' => [
        'protocol'          => '프로토콜',
        'php'               => 'PHP 메일',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP 호스트',
            'port'          => 'SMTP 포트',
            'username'      => 'SMTP 사용자 이름',
            'password'      => 'SMTP 비밀번호',
            'encryption'    => 'SMTP 보안',
            'none'          => '없음',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail 경로',
        'log'               => '로그 이메일',
    ],
    'scheduling' => [
        'tab'               => '스케줄링',
        'send_invoice'      => '청구서 미리알림 보내기',
        'invoice_days'      => '마감 이후 보내기',
        'send_bill'         => '청구서 미리알림 보내기',
        'bill_days'         => '마감 전에 보내기',
        'cron_command'      => 'Cron 명령',
        'schedule_time'     => '실행 시간',
        'send_item_reminder'=> '항목 미리알림 보내기',
        'item_stocks'       => '항목을 재고에 넣을 때 보내기',
    ],
    'appearance' => [
        'tab'               => '외관',
        'theme'             => '테마',
        'light'             => '밝은 테마',
        'dark'              => '어두운 테마',
        'list_limit'        => '페이지당 레코드수',
        'use_gravatar'      => '그라바타 사용',
    ],
    'system' => [
        'tab'               => '시스템',
        'session' => [
            'lifetime'      => '세션 수명 (분)',
            'handler'       => '세션 관리자',
            'file'          => '파일',
            'database'      => '데이터베이스',
        ],
        'file_size'         => '최대 파일 크기 (MB)',
        'file_types'        => '허용된 파일 형식',
    ],

];
