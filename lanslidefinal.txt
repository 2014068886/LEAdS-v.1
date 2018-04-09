#include<Wire.h>
int gyro=0;
const int MPU_addr=0x68;  // I2C address of the MPU-6050
int16_t AcX,AcY,AcZ,Tmp,GyX,GyY,GyZ;
int mm=0;
int mme=0;
int level=0;
int delayloop=0;
 int sensorValue=0;
  int sensorValue1=0;
int counter1=0;
const int buttonPin = 2;     // the number of the pushbutton pin
const int ledPin =  13;      // the number of the LED pin
// variables will change:
int buttonState = 0;         // variable for reading the pushbutton status

int eroision=0;
void setup(){
   // initialize the LED pin as an output:
  pinMode(ledPin, OUTPUT);      
  // initialize the pushbutton pin as an input:
  pinMode(buttonPin, INPUT_PULLUP);   

  Wire.begin();
  Wire.beginTransmission(MPU_addr);
  Wire.write(0x6B);  // PWR_MGMT_1 register
  Wire.write(0);     // set to zero (wakes up the MPU-6050)
  Wire.endTransmission(true);
  Serial.begin(9600);
  
    /////////////for gyro
     int sensorValue1 = analogRead(A2);
 int bat=((1024-sensorValue1)/100);
 Serial.print("X:");

 Serial.print(bat);
Serial.println(); 
}
void loop(){
  
    /////////////for gyro
     int sensorValue1 = analogRead(A2);
 int bat=((1024-sensorValue1)/100);
 Serial.print("X:");

 Serial.print(bat);
Serial.println(); 


  Wire.beginTransmission(MPU_addr);
  Wire.write(0x3B);  // starting with register 0x3B (ACCEL_XOUT_H)
  Wire.endTransmission(false);
  Wire.requestFrom(MPU_addr,14,true);  // request a total of 14 registers
  AcX=Wire.read()<<8|Wire.read();  // 0x3B (ACCEL_XOUT_H) & 0x3C (ACCEL_XOUT_L)     
  AcY=Wire.read()<<8|Wire.read();  // 0x3D (ACCEL_YOUT_H) & 0x3E (ACCEL_YOUT_L)
  AcZ=Wire.read()<<8|Wire.read();  // 0x3F (ACCEL_ZOUT_H) & 0x40 (ACCEL_ZOUT_L)
  Tmp=Wire.read()<<8|Wire.read();  // 0x41 (TEMP_OUT_H) & 0x42 (TEMP_OUT_L)
  GyX=Wire.read()<<8|Wire.read();  // 0x43 (GYRO_XOUT_H) & 0x44 (GYRO_XOUT_L)
  GyY=Wire.read()<<8|Wire.read();  // 0x45 (GYRO_YOUT_H) & 0x46 (GYRO_YOUT_L)
  GyZ=Wire.read()<<8|Wire.read();  // 0x47 (GYRO_ZOUT_H) & 0x48 (GYRO_ZOUT_L)

  AcX=30000+AcX;
    //Serial.print("AcX = "); Serial.println(AcX);
  if (AcX>14200)
  {
  
  eroision=1;
  }
  if (AcX<12800)
  {
  
  eroision=1;
  }
    if ((AcX>13400)&& (AcX<14000))
  {
  eroision=0;
  
  }
    // read the state of the pushbutton value:
  buttonState = digitalRead(buttonPin);

  // check if the pushbutton is pressed.
  // if it is, the buttonState is HIGH:
  if (buttonState == HIGH) {     
    // turn LED on:    
    /////////////for rainfall
    if (mm==0)
    {
      mme=mme+25;
       
    }
      mm=1;
  
 
  } 
  else {
    // turn LED off:
      if (mm==1)
    {
    //  mme=0;

    }
      mm=0;
   

  }





  
  sensorValue1=0;
  

    
      int sensorValue = analogRead(A0)+7;
  sensorValue =  100-(sensorValue/7);
  if (sensorValue <1)
  {
  sensorValue =0;
  }
    if (sensorValue >98)
  {
  sensorValue =100;
  }
  
    
    

   sensorValue1=sensorValue1+ sensorValue;






counter1++;





  /////////////for printing
if (counter1>400)
{counter1=0;


 
 Serial.print("M:");
  Serial.print(sensorValue1);
 Serial.println();
 
 Serial.print("R:");
  Serial.print(mme);
    Serial.println();

  Serial.print("E:");
 Serial.print(eroision);
  Serial.println();
}

}

void serialEvent() {
  while (Serial.available()) {
    // get the new byte:
    char inChar = (char)Serial.read(); 
    // add it to the inputString:
    if (inChar == '0') {
      mme=0;
      sensorValue1=0;
    
    } 
  }
}
