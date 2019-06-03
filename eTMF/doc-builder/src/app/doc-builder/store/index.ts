import { ActionReducerMap, createSelector, createFeatureSelector } from '@ngrx/store';
import * as fromExplorer from './explorer.reducer';
export class ExplorerState {
	docExplorerDetails: fromExplorer.ExplorerState;
}
export const reducers: ActionReducerMap<ExplorerState> = {
	docExplorerDetails: fromExplorer.reducer,
}

export const selectedDocExplorerModuleFeatureState = createFeatureSelector<any>('doc-explorer');

export const selectDocExplorerState = createSelector(selectedDocExplorerModuleFeatureState, (state: ExplorerState) => state.docExplorerDetails);
export const getDocExplorerDetails = createSelector(selectDocExplorerState, fromExplorer.getDocExplorerDetails);