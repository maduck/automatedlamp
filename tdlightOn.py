# Meng-import modul yang dibutuhkan
import RPi.GPIO as GPIO
import sys

# Penggunaan skema BCM GPIO 
GPIO.setmode(GPIO.BCM)

# mendeklarasi pin yang akan digunakan

pinList = [2]

# loop melalui pin dan mengatur mode dan keadaan untuk 'high'

for i in pinList: 
    GPIO.setwarnings(False)
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)
    print "Sukses"

def trigger() :
        for i in pinList:
          GPIO.output(i, GPIO.HIGH)
          
          break
     
try: 
    trigger()
      
except KeyboardInterrupt:
  print "  Quit" 
  # Reset GPIO settings
  GPIO.cleanup()
