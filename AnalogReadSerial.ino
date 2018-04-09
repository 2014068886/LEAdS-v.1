 int sensorValue=0;
  int sensorValue1=0;
void setup() {
  // initialize serial communication at 9600 bits per second:
  Serial.begin(9600);
  
  
    // read the input on analog pin 0:
sensorValue = analogRead(A0)+7;
  sensorValue =  100-(sensorValue/7);
  if (sensorValue <0)
  {
  sensorValue =0;
  }
    if (sensorValue ==99)
  {
  sensorValue =100;
  }
}

// the loop routine runs over and over again forever:
void loop() {

  
  sensorValue1=0;
  
    for(int pos = 0; pos < 301; pos += 1)  // goes from 0 degrees to 180 degrees 
  {    
    
      int sensorValue = analogRead(A0)+7;
  sensorValue =  100-(sensorValue/7);
  if (sensorValue <0)
  {
  sensorValue =0;
  }
    if (sensorValue >98)
  {
  sensorValue =100;
  }
  
    
    

   sensorValue1=sensorValue1+ sensorValue;


 }

  

  Serial.println(sensorValue1/300);
  delay(10);        // delay in between reads for stability
}
