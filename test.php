<?php
$csr = <<<CSR
-----BEGIN CERTIFICATE REQUEST-----
MIIC7jCCAdYCAQAwgY0xEjAQBgNVBAgMCVTDuG5zYmVyZzEWMBQGA1UEAwwNY2hh
dC5hY2x1Yi5ubzEOMAwGA1UECgwFQWNsdWIxHjAcBgkqhkiG9w0BCQEWD3Rob21h
c0BzbTM2MC5ubzELMAkGA1UEBhMCTk8xEjAQBgNVBAcMCVTDuG5zYmVyZzEOMAwG
A1UECwwFQWNsdWIwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDjjtJg
avDxuPBroafUP4cxHgq23ad1X92khuPyMFBvvdFlBQWphq17Bvlvf+0U01wNxcME
k6Uvxm7jhbR9ZuAa38uIaNzOSLVsJGaPh6ptcWnZJP/iLR9IG+ODsMWg41L0ZH44
idqVdFGA0PpFLJ4F1MD/qmX33+BcPGoNoQd1tg1/iiR3HZa57o4SWCmcfmwetp5a
EENdJ91zW1Z6j9T+MqLVTDOHedoHUkV1ZJXo0q0/AxZEHxyODo999J217Fe3RPK2
Q1Q4YbUAR7fnI4rfbCNk0wMb2OAMEUn69rexqtpQTCIF5FtlMEu5W3Gu/gXNg2Wj
GOUhQVlrKJoafBzxAgMBAAGgGzAZBgkqhkiG9w0BCQcxDAwKaFZ3MTJWMWg4NDAN
BgkqhkiG9w0BAQUFAAOCAQEAuH7MdU2kxEuSq5isYCAqrI17X+0MWtBfw2hJpHu3
5KVLpsDDZtYpZstOKYGR6rGURkWg47eKJHqi9KtS0hKH5iRE/C6YKD7fbh4Rjgdd
FB4Pr1IQFlJW6vGDnMV/Gx/LpCLIbubsmNwmq7fwMZDCuNHd9hObyA4nTUuxw0nC
FYAMTD3JW8lT0WtiJYJB3AjRQw5xwYOHGrc/41uXmzy+dfnPJFFAlUKythjjobiX
gGXQXJJ0XKj70+hsVmAFP3Io1qWrMj9K6jbe7o9+PBB9vfgoCqvMbrIm1Pb+mFBk
MsPciu9AyuJBZpPrDip/4K368fra7+9cfRlc8u//J9WgYA==
-----END CERTIFICATE REQUEST-----
CSR;


$utf8 = <<<CSR
-----BEGIN CERTIFICATE REQUEST-----
MIIC9jCCAd4CAQAwgbAxCzAJBgNVBAYTAlZOMRcwFQYDVQQIDA5I4buTIENow60g
TWluaDEXMBUGA1UEBwwOSOG7kyBDaMOtIE1pbmgxGDAWBgNVBAoMD1bDlSDEkMOM
TkggTMOCTTELMAkGA1UECwwCSVQxIDAeBgNVBAMMF2Jkc2todWRvbmdzYWlnb24u
Y29tLnZuMSYwJAYJKoZIhvcNAQkBFhd2b2RpbmhsYW0xMDAyQGdtYWlsLmNvbTCC
ASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMX+aOst788xb4L4h15JXP08
FyuQawo0JNcqUC0y5HwmN0QZnP9xYaqp9H9Whz3IlMW8+lDkw1qAx/d8dnZCkDi8
WMEVGB3xH2H7K7oKmYooDIn5Uw6CzQSllL+4cXJbAx3QWIMXaV1nht1YJuIgD+hR
2SIUs35fDuxVH1sEbASoH1xGGoGlQm2xbqLzwiBzR3Z740chc7pr8OA29dgAkT1B
QKOJNLI1mxMKKJhvxr4MbES72F4cY9etkGzvqyuc4a8Q0O0IEgaLcluAwGSF3HX9
uRMNfpSG3NzcpJt3GFspr7D/CbdkrtmZ+6GvYapeF53lZLwia5ADRtcFYLHjVssC
AwEAAaAAMA0GCSqGSIb3DQEBCwUAA4IBAQAEi68NtrRFq/9EG8pE4SdvDQcPfwPT
xPX1cP3085glu1vHuNGAlqqNCvJmCLRYvisVAWGOROAFJWKJ3mr/Cztu3gfM8mvY
h0XNHPmC2f+COVW6pIreo+zsfPOSSsehcTRPgtU/GGx/9zCWHBCcAU4OHhuYQmSO
xl8+EI07R63XvpTJd9+UQoZgU6EFUuKrkUGZ50oKe2N2lVDttVRhKJ+gsHGnN2UF
ABoZqSWlpwh0Z9R8yRt+IpqPQMfgBwl0+VE48/hA33Vo7OCYjpFKTZa+Q2rKRvHT
a2NMMwmDSmJydywkoLP9UJCik0TtJG9j3S/RS/3xvHtYpYLHF6jcANWL
-----END CERTIFICATE REQUEST-----
CSR;

$san = <<<CSR
-----BEGIN CERTIFICATE REQUEST-----
MIIEeTCCA2ECAQAwfDEkMCIGA1UEAwwbZXhtYWlsLmFsYXNrYW5jcmFiY28uY29t
LmF1MQ4wDAYDVQQLDAVBZG1pbjEYMBYGA1UECgwPQWxhc2thbiBDcmFiIENvMQ8w
DQYDVQQHDAZTeWRuZXkxDDAKBgNVBAgMA05TVzELMAkGA1UEBhMCQVUwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCNtnluvziE9Hf7/aw4V/PfcFD1l5Rw
jWYOAjwmU4blaBK5zNxwlZIvMSuNP46xqA43CPyHZABsbvHPBKSY2NYb5mu/TttS
gki60bZ/jUwaF7DotT78cfun7aUXVYsER7OrGEuKYBIsm8A6CbLyw+djo2+lEoUM
ozllSzYVN9k/v7t368skf9XFEf/KFqeUYtiFmRzDmNwyYen4vi+assnRz8wVT+Aa
cTlYT72L6oQ3SH+RnlPbdhDvx3D4NoXKmnktqVtHBfwQAZExJNiYlm6CkbaVnEdM
zXQJg5Wc43e+Feho7oYc2WB2HUpRjb2FHyiwbuCfSDC1a9uMatdDc5mnAgMBAAGg
ggG2MBoGCisGAQQBgjcNAgMxDBYKNi4yLjkyMDAuMjBrBgkrBgEEAYI3FRQxXjBc
AgEFDCFTUlYtTUFJTC5zeWQuYWxhc2thbmNyYWJjby5jb20uYXUMEEFLS1NZRFxT
UlYtTUFJTCQMIk1pY3Jvc29mdC5FeGNoYW5nZS5TZXJ2aWNlSG9zdC5leGUwcgYK
KwYBBAGCNw0CAjFkMGICAQEeWgBNAGkAYwByAG8AcwBvAGYAdAAgAFIAUwBBACAA
UwBDAGgAYQBuAG4AZQBsACAAQwByAHkAcAB0AG8AZwByAGEAcABoAGkAYwAgAFAA
cgBvAHYAaQBkAGUAcgMBADCBtgYJKoZIhvcNAQkOMYGoMIGlMA4GA1UdDwEB/wQE
AwIFoDBmBgNVHREEXzBdghtleG1haWwuYWxhc2thbmNyYWJjby5jb20uYXWCIUF1
dG9EaXNjb3Zlci5hbGFza2FuY3JhYmNvLmNvbS5hdYIbcmVtb3RlLmFsYXNrYW5j
cmFiY28uY29tLmF1MAwGA1UdEwEB/wQCMAAwHQYDVR0OBBYEFOxydPyynZeL1f5H
sd3Ka52mtdAZMA0GCSqGSIb3DQEBBQUAA4IBAQBw8qOYwdLwqXPY7yIwwtE8eX4P
MSxn/HGC05hWn1/ztuLYzUZHOkCIQpPh2AjFe0JYuWIOhC59DT/fx7uZA1sdLdCe
tzeRLJ0D61I4NJo2BIAa05sctH856Spn0/atF8DKHlKZl/8hpQCfSjOliTDeVoKh
OwajwTJ0QBEmO4NxT8DdbRkmmJr1rop0f/NUyJXSeE4vAy3+nT2TnmcLbQiyDdce
QwVMS10o+FQWlU6GOrvNGeRxCTkqubyI4I+XwysJJZYdon3LUyOeHXJZWTsUPaIp
BkL7GlTH86DJU4eKVguIule9w5lekpWA4UF0fDOfrX2M92cCcwnd/GUuyKE6
-----END CERTIFICATE REQUEST-----

CSR;
   
	var_dump(csr_decoder($san));

?>
