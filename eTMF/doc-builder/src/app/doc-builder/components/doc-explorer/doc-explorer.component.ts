import { Component, OnInit, Input, OnChanges } from "@angular/core";
import { TreeModule } from "primeng/tree";
import { TreeNode } from "primeng/api";

@Component({
  selector: "app-doc-explorer",
  templateUrl: "./doc-explorer.component.html",
  styleUrls: ["./doc-explorer.component.scss"]
})
export class DocExplorerComponent implements OnInit, OnChanges {

  @Input()
  docExplorerDetails: TreeNode[];

  constructor() {}

  ngOnInit() {}

  ngOnChanges() {
    console.log(this.docExplorerDetails);
  }
}
