import { Http, Request, Response, RequestMethod } from '@angular/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';

import { TreeNode } from 'primeng/components/common/treenode';

@Injectable()
export class ExplorerService {
  constructor(private http: Http) {}

  loadDocExplorerDetails(): Observable<TreeNode[]> {
    return this.http
      .get('http://localhost:3000/data')
      .map((res: Response) => res.json())
      .catch((error: any) => Observable.throw(error));
  }
}
