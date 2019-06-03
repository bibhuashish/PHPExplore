import { Component, OnInit } from '@angular/core';
import { Store } from '@ngrx/store';
import { Observable } from 'rxjs/Observable';
import * as fromStore from './store';
import * as fromExplorerAction from './store/explorer.action';
import { Subscription } from 'rxjs';
import { TreeNode } from 'primeng/components/common/treenode';

@Component({
  selector: 'app-doc-builder',
  templateUrl: './doc-builder.container.html',
  styleUrls: ['./doc-builder.container.scss']
})
export class DocBuilderComponent implements OnInit {
  subscription: Subscription;
  docExplorerDetails$: Observable<any>;
  docExplorerDetails: TreeNode[];
  constructor(public store: Store<fromStore.ExplorerState>) {}

  ngOnInit() {
    this.createSubscription();
    this.store.dispatch(new fromExplorerAction.LoadDocuments());
    this.docExplorerDetails$ = this.store.select(
      fromStore.getDocExplorerDetails
    );
    this.subscription.add(
      this.docExplorerDetails$.subscribe(result => {
        console.log(result);
        this.docExplorerDetails = <TreeNode[]>result;
      })
    );
  }
  createSubscription() {
    this.subscription = new Subscription();
  }
}
