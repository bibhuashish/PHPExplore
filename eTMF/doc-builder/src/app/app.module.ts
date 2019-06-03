import { BrowserModule } from "@angular/platform-browser";
import { HttpModule } from '@angular/http';
import { BrowserAnimationsModule } from "@angular/platform-browser/animations";
import { NgModule } from "@angular/core";
import { FormsModule } from "@angular/forms";
import { HttpClientModule } from "@angular/common/http";
import { AppComponent } from "./app.component";
import { HeaderComponent } from "./header/header.component";
import { DocBuilderComponent } from "./doc-builder/doc-builder.container";
import { DocExplorerComponent } from "./doc-builder/components/doc-explorer/doc-explorer.component";

import { CardModule } from "primeng/card";
import { TreeModule } from "primeng/tree";
import { DocContentComponent } from './doc-builder/components/doc-content/doc-content.component';

import { StoreModule } from "@ngrx/store";
import { EffectsModule } from "@ngrx/effects";

import { reducers } from "./doc-builder/store";
import { ExplorerEffects } from "./doc-builder/store/explorer.effect";
import { ExplorerService } from "./doc-builder/store/explorer.service";

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    DocBuilderComponent,
    DocExplorerComponent,
    DocContentComponent
  ],
  imports: [
    BrowserModule,
    HttpModule,
    BrowserAnimationsModule,
    FormsModule,
    HttpClientModule,
    CardModule,
    TreeModule,
    StoreModule.forRoot({}),
    StoreModule.forFeature("doc-explorer", reducers),
    EffectsModule.forRoot([ExplorerEffects])
  ],
  providers: [ExplorerService],
  bootstrap: [AppComponent]
})
export class AppModule {}
