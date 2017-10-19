import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { CourselistComponent } from './courselist/courselist.component';
import { AddcourseComponent } from './addcourse/addcourse.component';

@NgModule({
  declarations: [
    AppComponent,
    CourselistComponent,
    AddcourseComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
