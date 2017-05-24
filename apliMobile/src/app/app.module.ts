import { ErrorHandler, NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { MyApp } from './app.component';

import { AsyncLocalStorageModule } from 'angular-async-local-storage';

import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { AuthService } from './../providers/auth-service/auth-service';

import { TabsPage } from '../pages/tabs/tabs';
import { MapPage } from '../pages/map/map';
import { VisitePage } from '../pages/visite/visite';
import { VisiteService } from '../providers/visite-service/visite-service';

@NgModule({
  declarations: [
    MyApp,
    VisitePage,
    MapPage,
    TabsPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp), 
    AsyncLocalStorageModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    VisitePage,
    MapPage,
    TabsPage
  ],
  providers: [
    
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    AuthService,
    VisiteService
  ]
})
export class AppModule {}