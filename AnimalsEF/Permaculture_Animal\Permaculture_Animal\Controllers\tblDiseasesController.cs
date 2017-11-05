using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Permaculture_Animal.Models;

namespace Permaculture_Animal.Controllers
{
    public class tblDiseasesController : Controller
    {
        private AnimalDBEntities db = new AnimalDBEntities();

        // GET: tblDiseases
        public ActionResult Index(string searchString)
        {
            var Diseases = from m in db.tblDiseases
                         select m;

            if (!String.IsNullOrEmpty(searchString))
            {
                Diseases = Diseases.Where(s => s.DiseaseName.Contains(searchString));
            }

            return View(Diseases);
        }

        // GET: tblDiseases/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblDisease tblDisease = db.tblDiseases.Find(id);
            if (tblDisease == null)
            {
                return HttpNotFound();
            }
            return View(tblDisease);
        }

        // GET: tblDiseases/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: tblDiseases/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "DiseaseID,DiseaseName")] tblDisease tblDisease)
        {
            if (ModelState.IsValid)
            {
                db.tblDiseases.Add(tblDisease);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(tblDisease);
        }

        // GET: tblDiseases/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblDisease tblDisease = db.tblDiseases.Find(id);
            if (tblDisease == null)
            {
                return HttpNotFound();
            }
            return View(tblDisease);
        }

        // POST: tblDiseases/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "DiseaseID,DiseaseName")] tblDisease tblDisease)
        {
            if (ModelState.IsValid)
            {
                db.Entry(tblDisease).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(tblDisease);
        }

        // GET: tblDiseases/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblDisease tblDisease = db.tblDiseases.Find(id);
            if (tblDisease == null)
            {
                return HttpNotFound();
            }
            return View(tblDisease);
        }

        // POST: tblDiseases/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            tblDisease tblDisease = db.tblDiseases.Find(id);
            db.tblDiseases.Remove(tblDisease);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
