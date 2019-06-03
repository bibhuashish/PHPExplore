import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DocExplorerComponent } from './doc-explorer.component';

describe('DocExplorerComponent', () => {
  let component: DocExplorerComponent;
  let fixture: ComponentFixture<DocExplorerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DocExplorerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DocExplorerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
