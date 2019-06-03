import * as fromExplorer from './explorer.action';
import { Explorer } from './explorer.model';
import { TreeNode } from 'primeng/components/common/treenode';

export interface ExplorerState {
    docExplorerDetails: {docDetails: TreeNode[]};
}

export const initialState: ExplorerState = {
    docExplorerDetails: {
        docDetails: []
    }
}

export function reducer (state = initialState, action: fromExplorer.ExplorerAction): ExplorerState {
    switch(action.type) {
        case fromExplorer.LOAD_DOCUMENTS: {
            return {
                ...state
            }
        }

        case fromExplorer.LOAD_DOCUMENTS_SUCCESS: {
            return { ...state, ...{docExplorerDetails: action.payload}};
        }

        case fromExplorer.LOAD_DOCUMENTS_FAIL: {
            return { ...state };
        }
    }
}

export const getDocExplorerDetails = (state: ExplorerState) => state.docExplorerDetails;