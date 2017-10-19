import { Injectable } from '@angular/core';
// import { Http, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs/Rx';

@Injectable()
export class ApiService {
 coursename: string
  coursecode: string 
  courseduration: string  
  CourseList: object[] = 
  [
    {'id':1,'coursename' : 'IT' , 'coursecode' : 'A100' , 'courseduration' : '1 years'} , 
    {'id':2,'coursename' : 'Music' , 'coursecode' : 'B200','courseduration' : '2 months'}, 
    {'id':3,'coursename' : 'Math' ,'coursecode' : 'C300', 'courseduration' : '3 months'} 
  ];
  constructor() { }

}


