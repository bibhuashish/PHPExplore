import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DocBuilderComponent } from './doc-builder.component';

describe('DocBuilderComponent', () => {
  let component: DocBuilderComponent;
  let fixture: ComponentFixture<DocBuilderComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DocBuilderComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DocBuilderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
