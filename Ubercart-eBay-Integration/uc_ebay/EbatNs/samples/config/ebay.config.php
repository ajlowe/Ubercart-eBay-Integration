<?php /*
[ebay-config]
; place keys and certificate here as provided from eBay
; this is the tripple for the sandbox
;;dev-key-test = "a8d8607c-6226-4abe-91c6-06925b389409"
;;app-key-test = "Ubercart-8646-492d-8eec-fde0920098d1"
;;cert-id-test = "fc43b15a-efb0-41fc-9c51-341c0164f4a0"
; and here for the production environment once you passed certification
//dev-key-prod  = "enter your dev-id here"
//app-key-prod  = "enter your app-id here"
//cert-id-prod =  "enter your cert-id here"

; primary site id
site-id = 0

; 1 => sandbox, 0 => production
;app-mode = 0
app-mode = 1

[ebay-transaction-config]
use-http-compression=0

[token]
; put in here the full absolute path to your config file !
token-pickup-file=/www/vhosts/ebay.ubercart.com/ebayapi/samples/tokens/my.token
token-mode=1
*/ ?>
