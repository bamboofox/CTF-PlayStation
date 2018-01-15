#!/usr/bin/env python3

from graphenebase.base58 import Base58
import sys
import random

flag = 'BAMBOOFOX{ba5ESBcHeCK}'

def keygen():
    n = format(random.randint(1, 2**256), '02X').zfill(64)
    return format(Base58(n),"wif")


count = 0
while 1:
    pk = keygen()
    print(pk[:-(random.randint(1,4))])
    print(pk)
    if input() != pk:
        print('error private key')
        sys.exit(0)
    count += 1
    if count == 5:
        break

count = 0
while 1:
    pk = keygen()
    pos = random.randint(1,51)
    print(pos)
    print(pk[:pos-1] + ' ' + pk[pos:])
    print(pk)
    if input() != pk:
        print('error private key')
        sys.exit(0)
    count += 1
    if count == 5:
        break

print(flag)
