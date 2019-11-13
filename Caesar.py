import string
import sys
import time

Word1 = input ('Введите слово 1: ')
Word2 = input ('Введите слово 2: ')
Word3 = input ('Введите слово 3: ')

print("\nГенерируем...")
timing = time.time()
while True:
    if time.time() - timing > 5.0:
        timing = time.time()
        break

Alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
Omega = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']

a = Word1[0]
b = Word2[-0]
Leng = len (Word3)
Avg = Leng // 2

if Word1.islower():
    Lower1 = string.ascii_lowercase.index(a)
    Alpha1 = Alpha[Lower1+1]
    print ("Ваш пароль: ")
    sys.stdout.write (Alpha1)
else:
    Upper1=string.ascii_uppercase.index(a)
    Omega1 = Omega[Upper1+1]
    print ("Ваш пароль: ")
    sys.stdout.write (Omega1)

if Word2.islower():
    Lower2 = string.ascii_lowercase.index(b)
    Alpha2 = Alpha[Lower2-1]
    sys.stdout.write (Alpha2)
else:
    Upper2=string.ascii_uppercase.index(b)
    Omega2 = Omega[Upper2-1]
    sys.stdout.write (Omega2)

if Word3.islower() and Leng % 2 == 0:
    Lower3 = string.ascii_lowercase.index(Word3[Avg])
    Alpha3 = Alpha[Lower3+1] 
    sys.stdout.write (Alpha3)

elif Word3.isupper() and Leng % 2 == 0:
    Upper3=string.ascii_uppercase.index(Word3[Avg])
    Omega3 = Omega[Upper3+1]
    sys.stdout.write (Omega3)

elif Word3.islower() and Leng % 2 == 1:
    Lower3 = string.ascii_lowercase.index(Word3[Avg])
    Alpha4 = Alpha[Lower3-1]
    sys.stdout.write (Alpha4)

else:
    Upper3=string.ascii_uppercase.index(Word3[Avg])
    Omega4 = Omega[Upper3-1]
    sys.stdout.write (Omega4)

    
'''
Сopyright © 2019 all rights reserved
by Alexander Shamin 431 group
'''