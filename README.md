# profile-auth

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install profile-auth
```

## Konfigurasi

Tambahkan konfigurasi seperti di bawah:

```php
return [
	'profileAuth' => [
		'cookie' => [
			'name' => '_pr_auth'
		]
	]
];
```

## Service

Module ini menambah satu service dengan nama `profile` untuk menentukan
profile yang sedang login:

### isLogin(): bool

### getSession(): object