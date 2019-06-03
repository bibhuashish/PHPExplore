import { Injectable } from '@angular/core';

import { Effect, Actions } from '@ngrx/effects';
import { of } from 'rxjs/observable/of';
import * as fromExplorerAction from './explorer.action';
import * as fromExplorerService from './explorer.service';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/mergeMap';
import 'rxjs/add/operator/map';

@Injectable()
export class ExplorerEffects {
  constructor(
    public actions$: Actions,
    public api: fromExplorerService.ExplorerService
  ) {}

  @Effect()
  loadDocExplorerDetails$ = this.actions$
    .ofType(fromExplorerAction.LOAD_DOCUMENTS)
    .mergeMap((action: fromExplorerAction.LoadDocuments) =>
      this.api.loadDocExplorerDetails()
    )
    .map(result => new fromExplorerAction.LoadDocumentsSuccess(result))
    .catch(error =>
      Observable.of(
        new fromExplorerAction.LoadDocumentsFail(error)
      )
    );
}
