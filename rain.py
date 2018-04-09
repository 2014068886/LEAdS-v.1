
import serial
import os
import time
ser = serial.Serial(
port='/dev/ttyUSB0',
baudrate = 9600,
timeout=0.11,
writeTimeout=0.01,
bytesize=serial.EIGHTBITS,
parity=serial.PARITY_NONE,
stopbits=serial.STOPBITS_ONE,
xonxoff=False,
rtscts=False,
dsrdtr=False


)

counter7=0
counter=0
counter1=0
counter2=0
counter3=0
counter4=0
counter5=0
cmds=0
ser.close()
ser.open()
ser.flushInput()
ser.flushOutput()

sensor=open("/var/www/html/degrees.txt","w")
sensor.write("0")
sensor.close()
sensor=open("/var/www/html/level.txt","w")
sensor.write("0")
sensor.close()
sensor=open("/var/www/html/moisture.txt","w")
sensor.write("0")
sensor.close()
sensor=open("/var/www/html/rain.txt","w")
sensor.write("0")
sensor.close()

sensor=open("/var/www/html/moisholder.txt","w")
sensor.write("0")
sensor.close()
sensor=open("/var/www/html/rainholder.txt","w")
sensor.write("0")
sensor.close()
sensor=open("/var/www/html/bat.txt","w")
sensor.write("0")
sensor.close()

while True:
    counter=counter+1
    counter7=counter7+1
    
    serdata= ser.readline()

    if (counter7==1):
        ser.write("2")
        serdata= ser.readline()
        sensor=open("/var/www/html/moisture.txt","w")
        sensor.write(serdata)
        print serdata
        sensor.close()
        serdata=""
  
    counter7=counter7+1
           
    if (counter7==2):
        ser.write("1")
        serdata= ser.readline()
        sensor=open("/var/www/html/bat.txt","w")
        sensor.write(serdata)
        print serdata
        sensor.close()
        serdata=""
    counter7=counter7+1
    
    if (counter7==3):
        ser.write("3")
        serdata= ser.readline()
        sensor=open("/var/www/html/rain.txt","w")
        sensor.write(serdata)
        print serdata
        sensor.close()
        serdata=""
    counter7=counter7+1
    
    if (counter7==4):
        ser.write("4")
        serdata= ser.readline()
        sensor=open("/var/www/html/degrees.txt","w")
        sensor.write(serdata)
        print serdata
        sensor.close()
        serdata=""
        counter7=0
    
    
    #print counter
    if (counter>300):# 60 is for one mins
     
        counter=0
        sensor=open("/var/www/html/degrees.txt","w")
        sensor.write("0")
        sensor.close()
        sensor=open("/var/www/html/level.txt","w")
        sensor.write("0")
        sensor.close()
        sensor=open("/var/www/html/moisture.txt","w")
        sensor.write("0")
        sensor.close()
        sensor=open("/var/www/html/rain.txt","w")
        sensor.write("0")
        sensor.close()      
        sensor=open("/var/www/html/moisholder.txt","w")
        sensor.write("0")
        sensor.close()
        sensor=open("/var/www/html/rainholder.txt","w")
        sensor.write("0")
        sensor.close()
        ser.write('0')


