#include <LiquidCrystal.h>
LiquidCrystal lcd(10, 11, 7, 6, 5, 4);
int mm=0;
int mme=0;
int level=0;
int delayloop=0;
 int sensorValue=0;
  int sensorValue1=0;
int counter1=0;
const int buttonPin = 2;     // the number of the pushbutton pin
const int ledPin =  13;      // the number of the LED pin
int buttonState = 0;         // variable for reading the pushbutton status
int eroision=0;
const int  gyroPin = A3;     // the number of the pushbutton pin
int gyroState = 0;         // variable for reading the pushbutton status
long int batlife=0;
void setup(){
 
  pinMode(ledPin, OUTPUT);      
  pinMode(buttonPin, INPUT_PULLUP);   
  Serial.begin(9600);
  lcd.begin(16, 2);
  lcd.print("BATTERY:");
  Serial.begin(9600);
  pinMode(gyroPin, INPUT_PULLUP);  
}
void loop(){
 

 
  buttonState = digitalRead(buttonPin);
  if (buttonState == HIGH) {     
    if (mm==0){mme=mme+25;}
      mm=1;} 
  else {if (mm==1){mme=mme+25;}
      mm=0;}
      //mm=0;
  //}


     batlife=0;
  for (int thisPin = 0; thisPin < 1800; thisPin++) { 
 
  int sensorValue = analogRead(A2);
  
  sensorValue=(sensorValue/102);  
  batlife=batlife+sensorValue;
  
   serialEvent();
  } 
  batlife=batlife/1800;
  if (batlife>100)
  {batlife=100;}
  if (batlife<0)
  {batlife=0;}
  
  lcd.setCursor(0, 1);
 
//  lcd.print(batlife);
 // lcd.print(" %");
  



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
    if (inChar == '1') {
  lcd.setCursor(0, 1);

     batlife=0;
  for (int thisPin = 0; thisPin < 800; thisPin++) { 
 
  int sensorValue = analogRead(A2);
  
  sensorValue=(sensorValue/10);  
  batlife=batlife+sensorValue;
  
   
  } 
  batlife=batlife/800;
  if (batlife>100)
  {batlife=100;}
  if (batlife<0)
  {batlife=0;}
  
 

      Serial.print("X:");
  Serial.print(batlife);
  
  lcd.setCursor(0, 1);
 
  lcd.print(batlife);
  lcd.print(" %");
  
}
    if (inChar == '2') {

  sensorValue1=0;
  

    
  int sensorValue = analogRead(A0)+7;
  sensorValue =  100-(sensorValue/7);
  if (sensorValue <3)
  {
  sensorValue =0;
  }
    if (sensorValue >98)
  {
  sensorValue =100;
  }
  Serial.print("M:");
  Serial.print(sensorValue);
    }
    if (inChar == '3') {

  Serial.print("R:");
  Serial.print(mme);
    }
    if (inChar == '4') {
 
  gyroState = digitalRead(gyroPin);
  if (gyroState == HIGH) {     
eroision=0;
  } 
  else {
eroision=1;

  }
  Serial.print("E:");
  Serial.print(eroision);
  
    }
    
  }
}
