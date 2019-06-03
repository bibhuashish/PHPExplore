import { Action } from '@ngrx/store';
import { Explorer } from './explorer.model';

export const LOAD_DOCUMENTS = '[Doc] Load documents';
export const LOAD_DOCUMENTS_SUCCESS = '[Doc] Load documents Success';
export const LOAD_DOCUMENTS_FAIL = '[Doc] Load documents Fail';

export class LoadDocuments implements Action {
  readonly type = LOAD_DOCUMENTS;
}
export class LoadDocumentsSuccess implements Action {
  readonly type = LOAD_DOCUMENTS_SUCCESS;
  constructor(public payload: any) {}
}
export class LoadDocumentsFail implements Action {
  readonly type = LOAD_DOCUMENTS_FAIL;
  constructor(public payload: Explorer[]) {}
}

export type ExplorerAction =
  | LoadDocuments
  | LoadDocumentsFail
  | LoadDocumentsSuccess;
