<? php
termasuk  "function.php" ;
 warna gema ( "hijau" , "[] ASSALAMUALAIKUM [] \ n" );
 warna gema ( "kuning" , "[] OLEH: RIANISHA [] \ n" );
 warna gema ( "hijau" , "[] Waktu:" . date ( '[dmY] [H: i: s]' ). "[] \ n" );
 warna gema ( "kuning" , "[] Format Penulisan Nomor 62xxxxxxxx [] \ n" );
 perubahan fungsi () {
        $ nama = nama ();
        $ email = str_replace ( "" , "" , $ nama ). mt_rand ( 100 , 999 );
        ulang:
         warna gema ( "nevy" , "(•) Nomor:" );
        $ no = trim ( fgets ( STDIN ));
        $ data = '{"email": "' . $ email . '@ gmail.com", "name": "' . $ nama . '", "phone": "+' . $ no . '", " signed_up_country ":" ID "} ' ;
        $ register = request ( "/ v5 / customers" , null , $ data );
        if ( strpos ( $ register , '"otp_token"' )) {
        $ otptoken = getStr ( '"otp_token": "' , '"' , $ register );
         warna gema ( "hijau" , "+] Kode verifikasi sudah di kirim" ). "\ n" ;
        otp:
         warna gema ( "nevy" , "?] Otp:" );
        $ otp = trim ( fgets ( STDIN ));
        $ data1 = '{"client_name": "gojek: cons: android", "data": {"otp": "' . $ otp . '", "otp_token": "' . $ otptoken . '"}, " client_secret ":" 83415d06-ec4e-11e6-a41b-6c40088ab51e "} ' ;
        $ verif = permintaan ( "/ v5 / pelanggan / telepon / verifikasi" , null , $ data1 );
        if ( strpos ( $ verif , '"access_token"' )) {
         warna gema ( "hijau" , "+] Berhasil mendaftar" );
        $ token = getStr ( '"access_token": "' , '"' , $ verif );
        $ uuid = getStr ( '"resource_owner_id":' , ',' , $ verif );
        gema  "\ n" . color ( "nevy" , "?] Mau Redeem Voucher ?: y / n" );
        $ pilihan = trim ( fgets ( STDIN ));
        if ( $ pilihan == "y" || $ pilihan == "Y" ) {
         warna gema ( "merah" , "=========== (REDEEM VOUCHER) ===========" );
        gema  "\ n" . color ( "yellow" , "!] Klaim voc PESENGOFOOD" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        $ code1 = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PESENGOFOOD"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ message );
        goto goride;
        } lain {
        gema  "\ n" . color ( "red" , "-] Pesan:" . $ message );
        gema  "\ n" . color ( "yellow" , "!] Klaim voc RIANISHAALT01" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ alt01 = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": RIANISHAALT01"}' );
        $ Messagealt01 = fetch_value ( $ alt01 , ' "message": "' , '"' );
        if ( strpos ( $ alt01 , 'Promo kamu sudah bisa dipakai.' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ messagealt01 );
        goto goride;
        } lain {
        gema  "\ n" . color ( "red" , "-] Pesan:" . $ messagealt01 );
        gema  "\ n" . color ( "yellow" , "!] Klaim voc RIANISHAALT02" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ alt02 = permintaan ( '/ promosi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "RIANISHAALT02"}' );
        $ messageboba11 = fetch_value ( $ alt02 , '"message": "' , '"' );
        if ( strpos ( $ alt02 , 'Promo kamu sudah bisa dipakai.' )) {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ messagealt02 );
        goto goride;
        } lain {
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ messagealt02 );
        goride:
        gema  "\ n" . color ( "yellow" , "!] Klaim voc COBAINGOJEK" );
        gema  "\ n" . warna ( "kuning" , "!] Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "kuning" , "." );
        tidur ( 1 );
        }
        tidur ( 3 );
        $ goride = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "COBAINGOJEK"}' );
        $ message1 = fetch_value ( $ goride , '"message": "' , '"' );
        gema  "\ n" . color ( "green" , "+] Pesan:" . $ message1 );
        tidur ( 3 );
        $ cekvoucher = request ( '/ gopoints / v3 / wallet / voucher? limit = 10 & halaman = 1' , $ token );
        $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
        $ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
        $ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
        $ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
        $ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
        gema  "\ n" . color ( "yellow" , "!] Total voucher" . $ total . ":" );
         warna gema ( "hijau" , "1." . $ voucher1 );
        gema  "\ n" . warna ( "hijau" , "2." . $ voucher2 );
        gema  "\ n" . warna ( "hijau" , "3." . $ voucher3 );
        gema  "\ n" . warna ( "hijau" , "4." . $ voucher4 );
        $ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
        $ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
        $ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
        $ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
         Setpin:
         gema  "\ n" . warna ( "nevy" , "?] Mau mengatur pin ?: y / n" );
         $ pilih1 = trim ( fgets ( STDIN ));
         if ( $ pilih1 == "y" || $ pilih1 == "Y" ) {
         // if ($ pilih1 == "y" && strpos ($ no, "628")) {
          warna gema ( "merah" , "======== (PIN ANDA =700800) ========" ). "\ n" ;
         $ data2 = '{"pin": "700800"}' ;
         $ getotpsetpin = request ( "/ wallet / pin" , $ token , $ data2 , null , null , $ uuid );
         gema  "Otp set pin:" ;
         $ otpsetpin = trim ( fgets ( STDIN ));
         $ verifotpsetpin = request ( "/ wallet / pin" , $ token , $ data2 , null , $ otpsetpin , $ uuid );
         echo  $ verifotpsetpin ;
         } lain  jika ( $ pilih1 == "n" || $ pilih1 == "N" ) {
         mati ();
         } lain {
          warna gema ( "merah" , "-] GAGAL !!! \ n" );
         }
         }
         }
         }
         } lain {
         goto setpin;
         }
         } lain {
          warna gema ( "merah" , "-] Otp yang Anda masukan salah" );
         echo "\ n ================================== \ n \ n" ;
          warna gema ( "kuning" , "!] Silakan masukan kembali \ n" );
         pergi otp;
         }
         } lain {
          warna gema ( "merah" , "NOMOR SUDAH TERDAFTAR / SALAH !!!" );
         echo  "\ nMau ulang? (y / n):" ;
         $ pilih = trim ( fgets ( STDIN ));
         if ( $ pilih == "y" || $ pilih == "Y" ) {
         echo  "\ n ============== Mendaftar ============== \ n" ;
         goto ulang;
         } lain {
         echo  "\ n ============== Mendaftar ============== \ n" ;
         goto ulang;
  }
 }
}
 perubahan gema (). "\ n" ; ?>
